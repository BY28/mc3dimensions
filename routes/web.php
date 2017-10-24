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

Route::get('inprogress', function () {
    return view('inprogress');
});