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
Route::get('contact', function () {
    return view('contact');
});
Route::get('register', function () {
    return view('register');
});

Route::post('insert','App\Http\Controllers\MydbControllers@insert');

Route::get('showall','App\Http\Controllers\MydbControllers@showalldata');

Route::get('new', function () {
    return view('new');
});

