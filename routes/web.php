<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
//https force https
URL::forceScheme('https');

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/profile', function () {
    return view('frontend.profile');
});


Route::get('/update', function () {
    return view('frontend.update');
});

Route::get('/article', function () {
    return view('frontend.article');
});


Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/call', function () {
    return view('frontend.call');
});

