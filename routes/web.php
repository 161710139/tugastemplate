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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('tes',function(){
	return view('gambar');
});
Route::get('lirik',function(){
	return view('lirik');
});
Route::get('paragraf',function(){
	return view('paragraf');
});
Route::get('penulis',function(){
	return view('penulis');
});
Route::get('siswa','TugasController@siswa');

Auth::routes();

Route::get('/awal', 'HomeController@index');
