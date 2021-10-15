<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CorporatesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\UpdateController;
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

Route::redirect('/', '/en');

Route::group(['prefix' => '{lang}'], function () {

    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/benchmark', [CallController::class, 'index'])->name('benchmark');
    Route::get('/update', [UpdateController::class, 'index'])->name('update');
    Route::get('/performance', [PerformanceController::class, 'index'])->name('performance');
    Route::get('/corporatedetail/djarum', [CorporatesController::class, 'detail'])->name('corporatedetail');
    Route::get('/article/djarum', [ArticleController::class, 'detail'])->name('article');


    Route::get('/profile', function () {
        return view('frontend.profile');
    });


    Route::get('/article', function () {
        return view('frontend.article');
    });

});



