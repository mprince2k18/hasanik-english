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


Route::middleware('auth')->prefix('dashboard')->group(function () {
  Route::get('/', 'HomeController@index')->name('dashboard');
  
  /**
   * Enrollments
   */
  Route::get('/enrollments', 'HomeController@enroll_index')->name('enrollment.index');
  Route::get('/quick/view/{id}', 'EnrollController@show')->name('quick.view');
  Route::get('/form/data', 'EnrollController@form_data')->name('form.data');
  Route::get('/form/questions', 'EnrollController@form_question')->name('form.question');
  Route::post('/form/question/store', 'EnrollController@form_question_store')->name('form.question.store');
  
  /**
   * Form Data
   */
  Route::post('/form/data/occupation/store', 'EnrollController@occupation_store')->name('occupation.store');
  Route::post('/form/data/schedule/store', 'EnrollController@schedule_store')->name('schedule.store');
  Route::post('/form/data/payment/store', 'EnrollController@payment_store')->name('payment.store');

  /**
   * About us
   */
  Route::get('/about', 'PageController@about')->name('about');
  Route::post('/about/store', 'PageController@about_store')->name('about.store');
  Route::post('/mission/store', 'PageController@mission_store')->name('mission.store');

  /**
   * Team
   */
  Route::get('/team','TeamController@index')->name('team.index');
  Route::post('/team/store','TeamController@store')->name('team.store');

  /**
   * Category
   */

  Route::post('/category/store','CategoryController@store')->name('category.store');

  /**
   * BLOG
   */

  Route::get('/blog','BlogController@index')->name('blog.index');
  Route::post('/blog/store','BlogController@store')->name('blog.store');
  
  /**
   * Course
   */
  
  Route::get('/course','CourseController@index')->name('course.index');
  Route::post('/course/store','CourseController@store')->name('course.store');
  
  /**
   * Organization Settings
   */
  Route::get('/organization/settings','OrgSettingsController@index')->name('org.index');
  Route::post('/organization/settings/update','OrgSettingsController@update')->name('org.update');



});
