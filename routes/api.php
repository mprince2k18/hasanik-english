<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * ABOUT
 */
Route::get('/about','PageController@getAbout')->name('get.about');
Route::get('/mission','PageController@getMission')->name('get.mission');

/**
 * TEAM
 */
Route::get('/team','TeamController@getTeam')->name('get.team');

/**
 * BLOG
 */
Route::get('/blogs','BlogController@getBlogs')->name('get.blogs');
Route::get('/blog/{id}','BlogController@getBlog')->name('get.blog');
