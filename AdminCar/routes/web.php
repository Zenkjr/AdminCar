<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/admin', function () {
//    return view('layout.admin_template');
//});


use Illuminate\Support\Facades\Route;
Route::get('/admin', function () {
    return view('layout.admin_template');
});

Route::get('/car/list', 'CarController@index');
Route::get('/car/create', 'CarController@create');
Route::post('/car/store','CarController@store');
Route::get('/car/{id}/edit','CarController@edit');
Route::put('/car/{id}/update','CarController@update');
Route::post('/car/test','CarController@destroyCheck');
Route::delete('/car/delete/{id}','CarController@destroy');
Route::get('/car/{id}/show','CarController@show');


Route::get('/brand/list', 'BrandController@index');
Route::post('/brand/store','BrandController@store');
Route::delete('/brand/delete/{id}','BrandController@destroy');
Route::get('/brand/{id}/edit','BrandController@edit');
Route::put('/brand/update/{id}','BrandController@update');
Route::post('/brand/test','BrandController@destroyCheck');

Route::get('/clazz/list', 'ClazzController@index');
Route::post('/clazz/store','ClazzController@store');
Route::delete('/clazz/delete/{id}','ClazzController@destroy');
Route::get('/clazz/{id}/edit','ClazzController@edit');
Route::put('/clazz/update/{id}','ClazzController@update');
Route::post('/clazz/test','ClazzController@destroyCheck');


Route::get('/preorder/list', 'PreorderController@index');
Route::post('/preorder/store','PreorderController@store');

Route::get('/color/list', 'ColorController@index');
Route::post('/color/store','ColorController@store');
Route::delete('/color/delete/{id}','ColorController@destroy');
Route::get('/color/{id}/edit','ColorController@edit');
Route::put('/color/update/{id}','ColorController@update');
Route::post('/color/test','ColorController@destroyCheck');

Route::get('/country/list', 'CountryController@index');
Route::post('/country/store','CountryController@store');
Route::delete('/country/delete/{id}','CountryController@destroy');
Route::get('/country/{id}/edit','CountryController@edit');
Route::put('/country/update/{id}','CountryController@update');
Route::post('/country/test','CountryController@destroyCheck');


Route::get('/image/list', 'ImageController@index');
Route::post('/image/store','ImageController@store');

Route::get('/stock/list', 'StockController@index');
Route::post('/stock/store','StockController@store');
Route::get('/stock/{id}/edit','StockController@edit');
Route::put('/stock/{id}/update','StockController@update');
Route::post('/stock/test','StockController@destroyCheck');
Route::delete('/stock/delete/{id}','StockController@destroy');
Route::get('/stock/show','StockController@show');


Route::get('article/list/','ArticleController@index');
Route::get('article/create/','ArticleController@create');
Route::post('article/store/','ArticleController@store');
Route::get('article/{id}/edit','ArticleController@edit');
Route::put('article/{id}/update','ArticleController@update');
Route::delete('article/delete/{id}','ArticleController@destroy');
Route::post('/article/test','ArticleController@destroyCheck');

Route::resource('cars', 'FontEndController');
Route::get('/mua-xe', 'FontEndController@muaxe');
Route::get('/lienhe', 'FontEndController@lienhe');
Route::get('/detail', 'FontEndController@detail');
Route::post('/post/lienhe', 'FontEndController@contentLienHe');
Route::get('/brand/{id}', 'FontEndController@showBrand');

Route::get('/tin-tuc', 'FontEndController@article');