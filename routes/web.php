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
})->name('homepage');

Route::get('/v1/login',function(){
    return view('backend.auth.login');
})->name('v1.login');

Route::get('/migrate', function(){
  Artisan::call('migrate');
  Artisan::call('db:seed');
  return 'migrated';
});


Route::get('/enroll/course','EnrollController@index')->name('enroll.index');
Route::post('/enroll/course/store','EnrollController@store')->name('enroll.store');

/**
 * SEARCHING
 */
Route::get('/searching','SearchController@index')->name('searching');

