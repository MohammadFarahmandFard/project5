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

Route::get('/','DefController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','HomeController@admin');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/add','MobileController@show_add');
Route::post('/send_mobile','MobileController@save_mob');
Route::get('/show_pic','MobileController@show_pic');
Route::post('/send_car','CarController@save_car');
Route::get('/del','CarController@show_del');
Route::get('/del_m/{id}/{image}','MobileController@del_m');
Route::get('/edit1/{id}','MobileController@edit1');
Route::post('/edit2/{id}','MobileController@edit2');