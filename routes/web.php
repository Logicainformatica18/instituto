<?php

use Illuminate\Support\Facades\Route;
//agregar para el login
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:admin']], function () {
    //
    Route::resource('institute', 'InstituteController');
    Route::post('instituteStore', 'InstituteController@store');
    Route::post('instituteDestroy', 'InstituteController@destroy');
    Route::post('instituteEdit', 'InstituteController@edit');
    Route::post('instituteUpdate', 'InstituteController@update');
    Route::post('instituteShow', 'InstituteController@show');
});
