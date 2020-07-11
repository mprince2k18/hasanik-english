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

Route::get('/page/{any}', function () {
    return view('welcome');
})->where('any','.*');

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/enroll/course','EnrollController@index')->name('enroll.index');

Route::get('/home', 'HomeController@index')->name('home');
