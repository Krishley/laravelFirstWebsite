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



Route::get('/foo', function () {
	return view('foo');
})->name('foo');


Route::get('/bar', function () {
 	return view('bar');
})->name('bar');

Route::get('/shoutout/{text}', function ($text) {
	$color= array ("red,blue,green");
 	return view ('shoutout', array('text' => $text, 'color' => $color));
})->name('shoutout');

Route::get('/basic-arithmetic/{operation}/{num1}/{num2}',function($operation,$num1,$num2) {
	return view('basic-arithmetic', 
			array('operation'=>$operation,
				'num1'=>$num1,
				'num2'=>$num2,
				'sum'=>$sum=$num1+$num2,
				'diff'=>$diff=$num1-$num2,
				'mul'=>$mul=$num1*$num2,
				'div'=>$div=$num1/$num2
			));
})->name('basic-arithmetic');
