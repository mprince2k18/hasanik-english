<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('dashboard')->group(function () {
  Route::get('/', 'HomeController@index')->name('dashboard');
  Route::get('/enrollments', 'HomeController@enroll_index')->name('enrollment.index');
  Route::get('/quick/view/{id}', 'EnrollController@show')->name('quick.view');
  Route::get('/form/data', 'EnrollController@form_data')->name('form.data');
  Route::post('/form/data/occupation/store', 'EnrollController@occupation_store')->name('occupation.store');
  Route::post('/form/data/schedule/store', 'EnrollController@schedule_store')->name('schedule.store');
  Route::post('/form/data/payment/store', 'EnrollController@payment_store')->name('payment.store');
});
