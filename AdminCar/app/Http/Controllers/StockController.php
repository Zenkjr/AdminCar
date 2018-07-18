<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\Clazz;
use App\Color;
use App\Country;
use App\Image;
use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;


class StockController extends Controller
{
    //
    public function index()
    {
        $stock = Stock::paginate(10);
        foreach ($stock as $stockCar) {
            $idColor = $stockCar->color_id;
            $carId = $stockCar->car_id;
            $idCountry = $stockCar->country_id;
            $color = Color::where('id', $idColor)->first();
            $country = Country::where('id', $idCountry)->first();
            $img = Image::where('car_id', $carId)->first();
            $carName = Car::where('id', $carId)->first();
            $stockCar->name = $carName['name'];
            $stockCar->country = $country['name'];
            $stockCar->img = $img['url'];
            $stockCar->color = $color['name'];
        }
        return view('admin.stock.list')->with('stock', $stock);
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
                'action' => '/stock/' . $id . '/update'
            ]);
        }
    }

    public function show(request $request)
    {
        $stock = Stock::where('status', $request->get('choise_status'))->paginate(10);
        foreach ($stock as $stockCar) {
            $idColor = $stockCar->color_id;
            $carId = $stockCar->car_id;
            $idCountry = $stockCar->country_id;
            $color = Color::where('id', $idColor)->first();
            $country = Country::where('id', $idCountry)->first();
            $img = Image::where('car_id', $carId)->first();
            $carName = Car::where('id', $carId)->first();
            $stockCar->name = $carName['name'];
            $stockCar->country = $country['name'];
            $stockCar->img = $img['url'];
            $stockCar->color = $color['name'];
        }
        return view('admin.stock.list')->with('stock', $stock->appends(Input::except('page')));
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

        return redirect('/stock/list');
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
                $destroyId = Stock::Where('id', $item)->first();
                $destroyId->status = '0';
                $destroyId->save();
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/stock/list');
    }
}
