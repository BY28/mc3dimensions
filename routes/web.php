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

Route::get('domaines', function () {
    return view('domaines');
});

Route::get('domaines/bijouterie', function () {
    return view('domaine');
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

Route::get('inprogress', function () {
    return view('inprogress');
});

Route::group(['prefix' => 'comments'], function(){
	Route::post('/', ['uses' => 'CommentsController@create', 'as' => 'comments.create']);
	Route::get('/', ['uses' => 'CommentsController@show']);
	Route::get('all/{pass}', ['uses' => 'CommentsController@index', 'as' => 'comments.index']);
});