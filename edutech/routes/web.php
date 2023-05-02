<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
//Home Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//admin
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/login', 'AuthController@login')->name('login');
    Route::get('/register', 'AuthController@register')->name('register');
    Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');
    Route::post('/register', 'AuthController@doRegister')->name('admin.doRegister');
});
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::prefix('admin')->group(function () {
        Route::group(['namespace' => 'Admin'], function () {
            Route::get('/login', 'AuthController@login')->name('login');
            Route::get('/register', 'AuthController@register')->name('register');
            Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');
            Route::post('/register', 'AuthController@doRegister')->name('admin.doRegister');
        });
        Route::prefix('courses')->group(function(){
            Route::get('/', 'AdminController@index')->name('admin.home');
            Route::get('/create','AdminController@createCourses')->name('admin.courses.create');
        });
    });
});

