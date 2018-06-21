<?php

namespace App\Http\Controllers;

use App\Clazz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClazzController extends Controller
{
    public function index()
    {
        return view('admin.clazz.list')->with('clazzes', Clazz::orderBy('id', 'DESC')->paginate(10));
    }

    public function create()
    {
        return view('admin.clazz.form');
    }

    public function store(request $request)
    {
        $clazz = new Clazz();
        $clazz->clazzes_name = $request->get('name');
        $request->session()->flash('add', 'Thêm thành công!');
        $clazz->save();

        return redirect('clazz/list');
    }

    public function edit($id)
    {
        $clazz = Clazz::find($id);
        return $clazz;
    }

    public function update(request $request, $id)
    {
//        return 'oki';
        if ($request->isMethod('put')) {
            $clazzUpdate = Clazz::find($id);
            $clazzUpdate->clazzes_name = $request->get('name_Update');
            $clazzUpdate->save();
            return $clazzUpdate;
        }
    }

    public function destroy($id)
    {
        Clazz::destroy($id);
    }


    public function destroyCheck(request $request)
    {
//        return redirect('car/list');
        if ($request->isMethod('post')) {
            $arrayCheck = $request->input('checkName');
            foreach ($arrayCheck as $item) {
                Clazz::destroy($item);
            }
        }
        $request->session()->flash('Delete', 'Xóa thành công!');
        return redirect('/clazz/list');
    }
}
