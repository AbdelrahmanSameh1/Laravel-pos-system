<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::get('/', function () {
//    return view('backend.blank');
//});

Route::get('/', function () {
    return view('auth.register');
});





Route::group(

    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){





    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->middleware(['auth'])->name('dashboard');



    // categories
    Route::resource('categories', \App\Http\Controllers\CategorieController::class);




    require __DIR__.'/auth.php';


});









