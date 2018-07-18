<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    //
    public function index(){
        $images = Image::paginate(10);
        return view('admin.image.list')->with('image', $images);
    }
}
