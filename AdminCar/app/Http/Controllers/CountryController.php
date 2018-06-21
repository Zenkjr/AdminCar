<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    //
    public function index()
    {
        return view('admin.country.list')->with('country', Country::orderBy('id', 'DESC')->paginate(10));
    }

    public function create()
    {
        return view('admin.clazz.form');
    }

    public function store(request $request)
    {
        $country = new Country();
        $country->name = $request->get('name');
        $request->session()->flash('add', 'Thêm Mới thành công!');
        $country->save();

        return redirect('country/list');
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return $country;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $countryUpdate = Country::find($id);
            $countryUpdate->name = $request->get('name_Update');
            $countryUpdate->save();
            return $countryUpdate;
        }
    }

    public function destroy($id)
    {
        Country::destroy($id);
    }


    public function destroyCheck(request $request)
    {
//        return redirect('car/list');
        if ($request->isMethod('post')) {
            $arrayCheck = $request->input('checkName');
            foreach ($arrayCheck as $item) {
                Country::destroy($item);
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/country/list');
    }
}
