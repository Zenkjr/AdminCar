<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //

    public function index()
    {
        return view('admin.brand.list')->with('brand', Brand::orderBy('id', 'DESC')->paginate(10));
    }

    public function store(request $request)
    {
        $brand = new Brand();
        $brand->name = $request->get('name');
        $request->session()->flash('add', 'Thêm Mới thành công!');
        $brand->save();

        return redirect('brand/list');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return $brand;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $brandUpdate = Brand::find($id);
            $brandUpdate->name = $request->get('name_Update');
            $brandUpdate->save();
            return $brandUpdate;
        }
    }

    public function destroy($id)
    {
        Brand::destroy($id);
    }


    public function destroyCheck(request $request)
    {
//        return redirect('car/list');
        if ($request->isMethod('post')) {
            $arrayCheck = $request->input('checkName');
            foreach ($arrayCheck as $item) {
                Brand::destroy($item);
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/brand/list');
    }
}
