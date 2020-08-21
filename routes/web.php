<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', "HomeController@index");
// Route::get('/contatti', "HomeController@contatti");

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ],
    ],
    function() {
    Route::get('/', "HomeController@index")->name("home");
    Route::get(LaravelLocalization::transRoute('routes.contacts'), "HomeController@contatti")->name("contatti");
});
