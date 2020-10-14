<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('team', function () {
    return view('team');
});
Route::get('setmessage', function () {
    return view('setmessage');
});
Route::get('register', function () {
    return view('register');
});

Route::post('insert','App\Http\Controllers\MydbControllers@insert');

Route::get('showall','App\Http\Controllers\MydbControllers@showalldata');

Route::get('delete/{id}','App\Http\Controllers\MydbControllers@delete');
Route::get('edit/{id}','App\Http\Controllers\MydbControllers@edit');
Route::post('update/{id}','App\Http\Controllers\MydbControllers@update');
