<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Mobile;
class CarController extends Controller
{
    public function save_car(){
         request()->validate(['image'=>'required|max:2045|mimes:jpg,png,jpeg']);
        $file=(request()->file('image'));
        $file_name=$file->getClientOriginalName();
        $file_path='cars/';
        $file->move(public_path($file_path),$file_name);
        Car::create([
            'image'=>$file_name,
        ]);
        return back()->with('success','ok');
    }
    public function show_del(){
        $car=Car::all();
        $mobile=Mobile::all();
        return view('show_del',  compact('mobile','car'));
    }
}
