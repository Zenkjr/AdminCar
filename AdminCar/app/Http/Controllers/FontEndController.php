<?php

namespace App\Http\Controllers;

use App\Article;
use App\Car;
use App\Brand;
use App\Clazz;
use App\Color;
use App\Country;
use App\Image;
use App\Preorder;
use App\Stock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FontEndController extends Controller
{
    public function getByBrandId($id) {
        $cars = Car::where('brand_id', $id)->paginate(4);
        foreach ($cars as $car) {
            $clazz = Clazz::where('id', $car->clazz_id)->first();
            $stock = Stock::where('car_id', $car->id)->first();
            $img = Image::where('car_id', $car->id)->first();
            $car->price = $stock['price'];
            $car->clazz = $clazz['clazzes_name'];
            $car->img = $img['url'];
        }
        return $cars;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandAudi = $this->getByBrandId(4);
        $brandMazda = $this->getByBrandId(8);
        $brandBmw = $this->getByBrandId(3);
        $brandHyundai = $this->getByBrandId(7);
        return view('fontEnd.home')->with(['brandAudi' => $brandAudi, 'brandMazda' => $brandMazda, 'brandBmw' => $brandBmw, 'brandHyundai' => $brandHyundai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
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
        return view('fontEnd.detail')->with(['car' => $car,
            'image' => $img]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Mua xe.
    public function muaxe()
    {
        $cars = Car::orderBy('id', 'DESC')->paginate(6);
        foreach ($cars as $car) {
            $clazz = Clazz::where('id', $car->clazz_id)->first();
            $stock = Stock::where('car_id', $car->id)->first();
            $img = Image::where('car_id', $car->id)->first();
            $car->price = $stock['price'];
            $car->clazz = $clazz['clazzes_name'];
            $car->img = $img['url'];
        }
//        return $cars;

        return view('fontEnd.mua-xe')->with("cars", $cars);
    }

    // Liên hệ.
    public function lienhe()
    {
        return view('fontEnd.lienhe');
    }

    public function contentLienHe(request $request)
    {
        $preo = new Preorder();
        $preo->name = $request->get('name');
        $preo->tel = $request->get('phone');
        $preo->address = $request->get('address');
        $preo->email = $request->get('email');
        $preo->title = $request->get('title');
        $preo->content = $request->get('content');
        $preo->save();
        return view('fontEnd.lienhe');
    }
    public function showBrand($id){
        $cars = Car::where('brand_id',$id)->paginate(12);
        foreach ($cars as $car) {
            $clazz = Clazz::where('id', $car->clazz_id)->first();
            $stock = Stock::where('car_id', $car->id)->first();
            $img = Image::where('car_id', $car->id)->first();
            $car->price = $stock['price'];
            $car->clazz = $clazz['clazzes_name'];
            $car->img = $img['url'];
        }
        return view('fontEnd.mua-xe')->with("cars", $cars);
    }

    public function article()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('fontEnd.article')->with('articles', $articles);
    }

    public function articleDetail($id) {
        $article = Article::find($id);
        return view('fontEnd.article-detail')->with('article', $article);
    }
}
