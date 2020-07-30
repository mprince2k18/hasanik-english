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
    return view('dashboard.auth.login');
})->name('v1.login');

Route::get('/migrate', function(){
  Artisan::call('migrate:refresh');
  Artisan::call('db:seed');
  return 'migrated';
});


Route::get('/enroll/course','EnrollController@index')->name('enroll.index');
Route::post('/enroll/course/store','EnrollController@store')->name('enroll.store');
Route::get('/success','EnrollController@success')->name('enroll.success');

/**
 * SEARCHING
 */
Route::get('/searching','SearchController@index')->name('searching');


/*for install route*/
Route::group(['middleware' => 'install.check', 'prefix' => 'install'], function () {
    Route::get('/', 'InstallerController@welcome')->name('install');
    Route::get('permission', 'InstallerController@permission')->name('permission');
    Route::get('database', 'InstallerController@create')->name('create');
    Route::post('setup/database', 'InstallerController@dbStore')->name('db.setup');
    Route::get('check/database', 'InstallerController@checkDbConnection')->name('check.db');
    Route::get('setup/import/sql', 'InstallerController@importSql')->name('sql.setup');
    Route::get('setup/create', 'InstallerController@sqlUpload')->name('org.create');
    Route::post('setup/store', 'InstallerController@orgSetup')->name('org.setup');
    Route::get('setup/admin', 'InstallerController@adminCreate')->name('admin.create');
    Route::post('setup/admin/store', 'InstallerController@adminStore')->name('admin.store');
});


Route::group(['middleware'=>'installed'],function (){
    Auth::routes(['register' =>false]);
});


/*this is for redirect to prefix*/
Route::get('/home', function () {
    return redirect()->route('dashboard');
})->middleware('auth');

Route::group(['middleware' => 'auth', 'middleware'=>'installed', 'prefix' => 'dashboard'], function () {
//there are the user Manager section
//Route::get('user/create','UserManager\UserController@create')->middleware('permissions:user-create');
    Route::get('user/create', 'CommonController@userCreate')->name('users.create');
    Route::get('user/destroy/{id}', 'CommonController@userDestroy')->name('users.destroy');
    Route::post('user/store', 'CommonController@userStore')->name('users.store');
    Route::get('user/profile/edit', 'CommonController@userEdit')->name('users.edit');
    Route::post('user/update', 'CommonController@userUpdate')->name('users.update');
    Route::get('user/profile/{id}', 'CommonController@userShow')->name('users.show');
    Route::get('user', 'CommonController@userIndex')->name('users.index');
    Route::get('user/banned/{id}', 'CommonController@userBanned')->name('users.banned');

//permission
    Route::get('permission/destroy/{id}', 'CommonController@permissionDestroy')->name('permissions.destroy');
    Route::get('permission/create', 'CommonController@permissionCreate')->name('permissions.create');
    Route::post('permission/store', 'CommonController@permissionStore')->name('permissions.store');
    Route::get('permission/edit/{id}', 'CommonController@permissionEdit')->name('permissions.edit');
    Route::post('permission/update', 'CommonController@permissionUpdate')->name('permissions.update');
    Route::get('permission/show/{id}', 'CommonController@permissionShow')->name('permissions.show');
    Route::get('permission', 'CommonController@permissionIndex')->name('permissions.index');

//group
    Route::get('group/destroy/{id}', 'CommonController@groupDestroy')->name('groups.destroy');
    Route::get('group/create', 'CommonController@groupCreate')->name('groups.create');
    Route::post('group/store', 'CommonController@groupStore')->name('groups.store');
    Route::get('group/edit/{id}', 'CommonController@groupEdit')->name('groups.edit');
    Route::post('group/update', 'CommonController@groupUpdate')->name('groups.update');
    Route::get('group/show/{id}', 'CommonController@groupShow')->name('groups.show');
    Route::get('group', 'CommonController@groupIndex')->name('groups.index');

//module
    Route::get('module/index', 'CommonController@moduleIndex')->name('modules.index');
    Route::post('module/store', 'CommonController@moduleStore')->name('modules.store');
    Route::get('module/destroy/{id}', 'CommonController@moduleDestroy')->name('modules.destroy');
    Route::get('module/edit/{id}', 'CommonController@moduleEdit')->name('modules.edit');
    Route::post('module/update', 'CommonController@moduleUpdate')->name('modules.update');


//SMTP Setting
    Route::get('smtp', 'CommonController@smtpCreate')->name('smtp.create');
    Route::post('smtp/store', 'CommonController@smtpStore')->name('smtp.store');
//
//site setting
    Route::get('setting', 'CommonController@siteSetting')->name('site.setting');
    Route::post('setting/update', 'CommonController@siteSettingUpdate')->name('site.update');


//Language Setting
    Route::get('language', 'CommonController@langIndex')
        ->name('language.index');
    Route::post('language/store', 'CommonController@langStore')
        ->name('language.store');
    Route::get('language/destroy/{id}', 'CommonController@langDestroy')
        ->name('language.destroy');
    Route::get('language/translate/{id}', 'CommonController@translate_create')
        ->name('language.translate');
    Route::post('language/translate/store', 'CommonController@translate_store')
        ->name('language.translate.store');
    Route::post('language/change', 'CommonController@languagesChange')
        ->name('language.change');
    Route::get('language/default/{id}', 'CommonController@defaultLanguage')
        ->name('language.default');


//Currency Setting
    Route::get('currency', 'CommonController@currencyIndex')->name('currencies.index');
    Route::get('currency/create', 'CommonController@currencyCreate')->name('currencies.create');
    Route::post('currency/store', 'CommonController@currencyStore')->name('currencies.store');
    Route::get('currency/delete/{id}', 'CommonController@currencyDestroy')->name('currencies.destroy');
    Route::get('currency/edit/{id}', 'CommonController@currencyEdit')->name('currencies.edit');
    Route::post('currency/update', 'CommonController@currencyUpdate')->name('currencies.update');
    Route::post('currency/default', 'CommonController@currencyDefault')->name('currencies.default');
    Route::get('currency/published', 'CommonController@currencyPublished')->name('currencies.published');
    Route::get('currency/align', 'CommonController@currencyAlignment')->name('currencies.align');
    Route::post('currency/change', 'CommonController@currenciesChange')->name('currencies.change');

//Category
    Route::get('category/create', 'CommonController@categoryCreate')->name('categories.create');
    Route::post('category/store', 'CommonController@categoryStore')->name('categories.store');
    Route::get('category/edit/{id}', 'CommonController@categoryEdit')->name('categories.edit');
    Route::post('category/update', 'CommonController@categoryUpdate')->name('categories.update');
    Route::get('category/destroy/{id}', 'CommonController@categoryDestroy')->name('categories.destroy');
    Route::get('category', 'CommonController@categoryIndex')->name('categories.index');

//this route for published or unpublished
    Route::get('category/published', 'CommonController@categoryPublished')->name('categories.published');
    Route::get('category/popular', 'CommonController@categoryPopular')->name('categories.popular');
    Route::get('category/top', 'CommonController@categoryTop')->name('categories.top');


    Route::get('home', 'HomeController@index')->name('dashboard');
});

