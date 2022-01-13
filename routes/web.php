<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddCorporation;
use App\Http\Controllers\AddEksternal;
use App\Http\Controllers\AddInternal;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\CorporatesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EksternalController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesAboutController;
use App\Http\Controllers\PagesBenchmarkController;
use App\Http\Controllers\PagesGroupsController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\SettingFooter;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UpdatesController;
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
// //https force https
URL::forceScheme('https');

Route::redirect('/', '/en');

Route::group(['prefix' => '{lang}'], function () {

    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/benchmark', [CallController::class, 'index'])->name('benchmark');
    Route::get('/update', [UpdateController::class, 'index'])->name('update');
    Route::get('/performance', [PerformanceController::class, 'index'])->name('performance');
    Route::get('/detail/{id}/{slug}', [CorporatesController::class, 'detail'])->name('corporatedetail');
    Route::get('/groups', [CorporatesController::class, 'index'])->name('groups');
    Route::get('/article/{id}/{slug}', [ArticleController::class, 'detail'])->name('article');
    Route::get('/tags/{tag}', [TagsController::class, 'detail'])->name('tags');

});


//backend
//if has session redirect to dashboard
Route::group(['middleware' => 'checkSession'], function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/cms/settings', [SettingsController::class, 'index']);
    Route::get('/cms/listgroups', [GroupsController::class, 'index']);
    Route::get('/cms/updates', [UpdatesController::class, 'index']);
    Route::get('/cms/internal', [InternalController::class, 'index']);
    Route::get('/cms/eksternal', [EksternalController::class, 'index']);
    Route::get('/cms/addinternal', [AddInternal::class, 'index']);
    Route::get('/cms/addeksternal', [AddEksternal::class, 'index']);
    Route::get('/cms/internal/{id}', [InternalController::class, 'edit']);
    Route::get('/cms/eksternal/{id}', [EksternalController::class, 'edit']);
    Route::get('/cms/addcorporation', [AddCorporation::class, 'index']);
    Route::get('/cms/corporates/{id}', [GroupsController::class, 'edit']);
    Route::get('/cms/abouts', [PagesAboutController::class, 'index']);
    Route::get('/cms/benchmarks', [PagesBenchmarkController::class, 'index']);
    Route::get('/cms/pagegroups', [PagesGroupsController::class, 'index']);
    Route::get('/cms/settingfooter', [SettingFooter::class, 'index']);
});


//if there is no session , redirect to login page
Route::group(['middleware' => 'hasSession'], function () {
    Route::get('cms/login', [LoginController::class, 'index'])->name('login');
});




//route logout
Route::get('/cms/page/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});

Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
