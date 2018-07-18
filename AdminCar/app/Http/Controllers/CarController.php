<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\Clazz;
use App\Color;
use App\Country;
use App\Http\Requests\UploadRequest;
use App\Image;
use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function MongoDB\BSON\toJSON;

class CarController extends Controller
{
    public function index()
    {

        $cars = Car::paginate(10);
        foreach ($cars as $car) {
            $idShow = $car->id;
            $brandId = $car->brand_id;
            $clazz = $car->clazz_id;
            $img = Image::where('car_id', $idShow)->first();
            $status = Stock::where('car_id', $idShow)->first();
            $brand = Brand::where('id', $brandId)->first();
            $clazzName = Clazz::where('id', $clazz)->first();
            $car->clazz = $clazzName['clazzes_name'];
            $car->brand = $brand['name'];
            $car->status = $status['status'];
            $car->img = $img['url'];
        }
        return view('admin.car.list')->with('cars', $cars);
    }

    public function show($id)
    {
        $car = Car::find($id);
        $brand = Brand::where('id', $car->brand_id)->first();
        $clazz = Clazz::where('id', $car->clazz_id)->first();
        $stock = Stock::where('car_id', $car->id)->first();
        $country = Country::where('id', $stock->country_id)->first();
        $color = Color::where('id', $stock->color_id)->first();
        $car->price = $stock['price'];
        $car->brand = $brand['name'];
        $car->clazz = $clazz['clazzes_name'];
        $car->status = $stock['status'];
        $car->country = $country['name'];
        $car->color = $color['name'];
        $car->first_plate = $stock['first_plate'];
        $car->regis_expiry = $stock['regis_expiry'];
        $img = Image::select('*')->where('car_id', $id)->get();
        return view('admin.car.show')->with(['car' => $car,
            'image' => $img]);
//        $cars = Car::find($id);
//        $img = Image::select('*')->where('car_id', $id)->get();
//        return view('admin.car.show')->with(['cars' => $cars,
//            'image' => $img]);
    }

    public function edit($id)
    {

        if ($id == null) {
            return 'wrong';
        } else {
            $country_id = Country::all();
            $color_id = Color::all();
            $brand_id = Brand::all();
            $clazz_id = Clazz::all();
            $stock = Stock::Where('car_id', $id)->first();
            $cars_edit = Car::find($id);
            return view('admin.car.form')->with([
                'country_id' => $country_id,
                'color_id' => $color_id,
                'brand_id' => $brand_id,
                'clazz_id' => $clazz_id,
                'car_stock' => $stock,
                'cars_edit' => $cars_edit,
                'title' => 'Sủa lại thông tin xe',
                'method' => 'put',
                'action' => '/car/' . $id . '/update'
            ]);
        }
    }

    public function create()
    {
        $country_id = Country::all();
        $color_id = Color::all();
        $brand_id = Brand::all();
        $clazz_id = Clazz::all();
        return view('admin.car.form')->with([
            'country_id' => $country_id,
            'color_id' => $color_id,
            'brand_id' => $brand_id,
            'clazz_id' => $clazz_id,
            'title' => 'Thêm xe mới',
            'car_stock' => new Stock(),
            'cars_edit' => new Car(),
            'action' => '/car/store',
            'method' => 'post'
        ]);
    }

    public function store(UploadRequest $request)
    {
//        add info to table ca
        $cars = new Car();
        $cars->name = $request->get('name');
        $cars->brand_id = $request->get('brand_id');
        $cars->year = $request->get('year');
        $cars->seat = $request->get('seat');
        $cars->engine = $request->get('engine');
        $cars->horse_power = $request->get('horse_power');
        $cars->tire_size = $request->get('tire_size');
        $cars->clazz_id = $request->get('clazz_id');
        $cars->note = $request->get('note');
        $cars->save();

//        add info to table Stock
        $stock = new Stock();
        $stock->car_id = $cars->id;
        $stock->note = $request->get('note');
        $stock->in_at = $request->get('first_plate');
        $stock->out_at = $request->get('regis_expiry');
        $stock->status = $request->get('status');
        $stock->plate_num = $request->get('plate_num');
        $stock->first_plate = $request->get('first_plate');
        $stock->regis_expiry = $request->get('regis_expiry');
        $stock->country_id = $request->get('country_id');
        $stock->color_id = $request->get('color_id');
        $stock->price = $request->get('price');
        $stock->save();
        $request->session()->flash('add', 'Thêm Mới thành công!');

//        add info to table image
//        $images = new Image();
        $images = $request->file('img_url');

        foreach ($images as $photo) {
            $url = $photo->store('public/upload');
            if (File::exists($photo)) {
                $url = "/storage/upload/" . $photo->hashName();
                echo $url;
            }
            Image::create([
                'car_id' => $cars->id,
                'url' => $url
            ]);
        }
        return redirect('/car/list');
    }

    public function update(request $request, $id)
    {
        $cars = Car::find($id);
        $stock = Stock::Where('car_id', $id)->first();
        $request->session()->flash('update', 'Sửa thành công!');

        $cars->name = $request->get('name');
        $cars->brand_id = $request->get('brand_id');
        $cars->year = $request->get('year');
        $cars->seat = $request->get('seat');
        $cars->engine = $request->get('engine');
        $cars->horse_power = $request->get('horse_power');
        $cars->tire_size = $request->get('tire_size');
        $cars->clazz_id = $request->get('clazz_id');
        $cars->note = $request->get('note');
        $cars->save();

//        add info to table Stock
        $stock->note = $request->get('note');
        $stock->in_at = $request->get('first_plate');
        $stock->out_at = $request->get('regis_expiry');
        $stock->status = $request->get('status');
        $stock->plate_num = $request->get('plate_num');
        $stock->first_plate = $request->get('first_plate');
        $stock->regis_expiry = $request->get('regis_expiry');
        $stock->country_id = $request->get('country_id');
        $stock->color_id = $request->get('color_id');
        $stock->price = $request->get('price');
        $stock->save();
        return redirect('/car/list');
    }

    public function destroy($id)
    {
        $destroyId = Stock::Where('car_id', $id)->first();
        $destroyId->status = '0';
        $destroyId->save();
    }

    public function destroyCheck(request $request)
    {
        if ($request->isMethod('post')) {
            $arrayCheck = $request->input('checkName');
            foreach ($arrayCheck as $item) {
                $destroyId = Stock::Where('car_id', $item)->first();
                $destroyId->status = '0';
                $destroyId->save();
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/car/list');
    }
}
