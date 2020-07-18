<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\UrlGenerator;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('pepa', 'MissingDataController@testdata');
Route::get('pepapig', 'MissingDataController@testdatastatic');
Route::get('popa','MissingDataController@chocha');
Route::fallback('Controller@listBrand');

Route::get('getdate','AshiController@myFirstFunction');
Route::get('myFirstRoute','FirstController@myFirstMethod');
/*

 $urlArray=  explode('/',url()->current());
    return 'Controller@'.$urlArray[3];
*/