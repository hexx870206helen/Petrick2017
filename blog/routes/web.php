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

Route::get('/home', function () {
    return view('content.home');
});

Route::get('add-user',function(){
	$name = Input::get('user_name');
	$sql = "INSERT INTO users (id,name) VALUES (?,?)";
	DB::INSERT($sql,array(1,$name));
})