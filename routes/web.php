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
    return view('welcome');
});





Route::get('/hello', function () {
    return view('hello');
});

#localhost:8000/page1

Route::get('/page1', function () {
	$array = [
		"NAME" => "" ,
		"ID"   => "" ,
		"GEN"  => ""
	];
	return view('page.page1' , $array);
});
Route::get('/page2', function () {
	return view('page.page2');
});
Route::get('/page3', function () {
	return view('page.page3');
});

Route::get('/page10/{id}', function ($id) {
	$array = [
		"ID" => $id
	];
	return view('page.page10',$array);
});



#localhost:8000/page1 TO localhost:8000/page
Route::post('/page','PageController@show');
Route::post('/page11','PageController@show_password');


