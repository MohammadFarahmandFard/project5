<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobile;
use App\Car;
class MobileController extends Controller
{
    public function show_add(){
        return view('pic');
    }
    public function save_mob(){
         request()->validate(['image'=>'required|max:2045|mimes:jpg,png,jpeg']);
        $file=(request()->file('image'));
        $file_name=$file->getClientOriginalName();
        $file_path='mobile/';
        $file->move(public_path($file_path),$file_name);
        Mobile::create([
            'image'=>$file_name,
            'name'=>  request('name'),
            'price'=>  request('price'),
            'number'=>  request('number')
        ]);
        return back()->with('success','ok');
    }
    public function show_pic(){
        $car=Car::all();
        $mobile=Mobile::all();
        return view('show_pics',  compact('mobile','car'));
    }
    public function del_m($id,$image){
        unlink("mobile/".$image);
        Mobile::find($id)->delete();
        return back();
    }
    public function edit1($id){
        $mobile=Mobile::find($id);
        return view('edit_page',  compact('mobile'));
    }
    public function edit2($id){
        $mobile=Mobile::find($id);
        $mobile->name=  request('name');
        $mobile->price=  request('price');
        $mobile->number=  request('number');
        $mobile->save();
        return redirect('/show_pic');
    }
}
