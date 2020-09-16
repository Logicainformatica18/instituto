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


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:admin']], function () {
    //
    Route::resource('institute', 'InstituteController');
    Route::post('instituteStore', 'InstituteController@store');
    Route::post('instituteDestroy', 'InstituteController@destroy');
    Route::post('instituteEdit', 'InstituteController@edit');
    Route::post('instituteUpdate', 'InstituteController@update');
    Route::post('instituteShow', 'InstituteController@show');
    //
    Route::resource('user', 'UserController');
    Route::post('userStore', 'UserController@store');
    Route::post('userDestroy', 'UserController@destroy');
    Route::post('userEdit', 'UserController@edit');
    Route::post('userUpdate', 'UserController@update');
    Route::post('userShow', 'UserController@show');

    //
    Route::resource('specialty', 'SpecialtyController');
    Route::post('specialtyStore', 'SpecialtyController@store');
    Route::post('specialtyDestroy', 'SpecialtyController@destroy');
    Route::post('specialtyEdit', 'SpecialtyController@edit');
    Route::post('specialtyUpdate', 'SpecialtyController@update');
    Route::post('specialtyShow', 'SpecialtyController@show');
    //
    Route::resource('course', 'CourseController');
    Route::post('courseStore', 'CourseController@store');
    Route::post('courseDestroy', 'CourseController@destroy');
    Route::post('courseEdit', 'CourseController@edit');
    Route::post('courseUpdate', 'CourseController@update');
    Route::post('courseShow', 'CourseController@show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home2');
