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
    return view('index');
});

Route::get('formations', function () {
    return view('formations');
});

Route::get('formations/3design', function () {
    return view('formation');
});

Route::get('domaines/dentaire', function () {
    return view('dentaire');
});
Route::get('domaines/joaillerie', function () {
    return view('joaillerie');
});
Route::get('domaines/prototypage', function () {
    return view('prototypage');
});

Route::get('about', function(){
	return view('about');
});

Route::get('contact', function(){
	return view('contact');
});

Route::get('blog', function(){
	return view('blog');
});


Route::get('products', function () {
    return view('products');
});

Route::get('product', function () {
    return view('product');
});


Route::get('print', function () {
    return view('print');
});

Route::get('send', function () {
    return view('send');
});

Route::get('support', function () {
    return view('support');
});


Route::get('inprogress', function () {
    return view('inprogress');
});

Route::get('objects', function(){
    return view('objects');
});

Route::get('objects/{object}', function($object){
    return view('app')->withObject($object);
});

Route::group(['prefix' => 'comments'], function(){
	Route::post('/', ['uses' => 'CommentsController@create', 'as' => 'comments.create']);
	Route::get('/', ['uses' => 'CommentsController@show']);
	Route::get('all/{pass}', ['uses' => 'CommentsController@index', 'as' => 'comments.index']);
});