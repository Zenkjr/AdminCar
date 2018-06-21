<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use function MongoDB\BSON\toJSON;

class ColorController extends Controller
{
    //
    public function index()
    {
        return view('admin.color.list')->with('color', Color::orderBy('id', 'DESC')->paginate(10));
    }

    public function create()
    {
        return view('admin.clazz.form');
    }

    public function store(request $request)
    {
        $color = new Color();
        $color->name = $request->get('name');
        $request->session()->flash('add', 'Tạo màu thành công!');
        $color->save();

        return redirect('color/list');
    }

    public function edit($id)
    {
        $color = Color::find($id);
        return $color;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $colorUpdate = Color::find($id);
            $colorUpdate->name = $request->get('name_Update');
            $colorUpdate->save();
            return $colorUpdate;
        }
    }

    public function destroy($id)
    {
        Color::destroy($id);
    }


    public function destroyCheck(request $request)
    {
//        return redirect('car/list');
        if ($request->isMethod('post')) {
            $arrayCheck = $request->input('checkName');
            foreach ($arrayCheck as $item) {
                Color::destroy($item);
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/color/list');
    }
}
