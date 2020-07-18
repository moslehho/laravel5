<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/', function () { return view('Frontend.welcome');
});


Route::group(['perfix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/admin', 'Backend\AdminController@index')->name('admin.index');

});

Route::group(['prefix' => 'admin/users', 'middleware' => 'admin'], function () {
    Route::get('/', 'Backend\UserController@index')->name('admin.users');
    Route::get('/create', 'Backend\UserController@create')->name('admin.users.create');
    Route::post('/store', 'Backend\UserController@store')->name('admin.users.store');
    Route::get('/edit/{user}', 'Backend\UserController@edit')->name('admin.users.edit');
    Route::post('/update/{user}', 'Backend\UserController@update')->name('admin.users.update');
    Route::get('/admin/users/status/{user}', 'Backend\UserController@updatestatus')->name('admin.users.status');
    Route::get('/profile/{user}', 'Backend\UserController@ViewProfile')->name('admin.users.profile');
});

Route::group(['prefix' => 'admin/category', 'middleware' => 'admin'], function () {
    Route::get('/', 'Backend\UserController@index')->name('admin.category');
    Route::get('/create', 'Backend\UserController@create')->name('admin.category.create');
    Route::post('/store', 'Backend\UserController@store')->name('admin.category.store');
    Route::get('/edit/{category}', 'Backend\UserController@edit')->name('admin.category.edit');
    Route::post('/update/{category}', 'Backend\UserController@update')->name('admin.category.update');

});



