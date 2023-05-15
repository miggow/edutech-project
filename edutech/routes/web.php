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


//admin
// Route::group(['namespace' => 'Admin'], function () {
//     Route::get('/login', 'AuthController@login')->name('login');
//     Route::get('/register', 'AuthController@register')->name('register');
//     Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');
//     Route::post('/register', 'AuthController@doRegister')->name('admin.doRegister');
// });
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'FEController@index')->name('home');
    Route::get('/detail/{id}', 'FEController@detailCourse')->name('detail.course');
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/login', 'AuthController@login')->name('admin.login');
        Route::get('/register', 'AuthController@register')->name('admin.register');
        Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');
        Route::post('/register', 'AuthController@doRegister')->name('admin.doRegister');
        Route::get('/logout', 'AuthController@logout')->name('admin.logout');
    });
    Route::prefix('admin')->group(function () {
        // Route::group(['namespace' => 'Admin'], function () {
        //     Route::get('/login', 'AuthController@login')->name('admin.login');
        //     Route::get('/register', 'AuthController@register')->name('admin.register');
        //     Route::post('/login', 'AuthController@doLogin')->name('admin.doLogin');
        //     Route::post('/register', 'AuthController@doRegister')->name('admin.doRegister');
        //     Route::get('/logout', 'AuthController@logout')->name('admin.logout');
        // });
        Route::prefix('courses')->group(function(){
            Route::get('/', 'AdminController@indexCourse')->name('admin.course.index');
            Route::get('/create','AdminController@createCourses')->name('admin.course.create');
            Route::get('/edit/{id}', 'AdminController@editCourse')->name('admin.course.edit');
            Route::post('/update/{id}', 'AdminController@updateCourse')->name('admin.course.update');
            Route::post('/create','AdminController@storeCourse')->name('admin.course.store');
            Route::get('/delete-course/{id}', 'AdminController@deleteCourse')->name('admin.course.delete');
        });
        Route::prefix('category')->group(function(){
            Route::get('/','AdminController@indexCategory')->name('admin.category.index');
            Route::get('/create','AdminController@createCategory')->name('admin.category.create');
            Route::post('create','AdminController@storeCategory')->name('admin.category.store');
            Route::get('/edit/{id}','AdminController@editCategory')->name('admin.category.edit');
            Route::post('/edit/{id}', 'AdminController@updateCategory')->name('admin.category.update');
            Route::get('/delete-category/{id}','AdminController@deleteCategory')->name('admin.category.delete');
        });
        //module
        Route::get('/course/{id?}/modules', 'AdminController@indexModule')->name('admin.module.index');
        Route::get('/course/{id?}/modules/create', 'AdminController@createModule')->name('admin.module.create');
        Route::post('/modules/store', 'AdminController@storeModule')->name('admin.module.store');
        Route::get('/modules/{id?}/edit', 'AdminController@editModule')->name('admin.module.edit');
        Route::post('/modules/update/{id?}', 'AdminController@updateModule')->name('admin.module.update');
        Route::get('/modules/delete/{id}', 'AdminController@deleteModule')->name('admin.module.delete');
        //lesson
        Route::get('/modules/{id?}/lesson', 'LessonController@indexLesson')->name('admin.lesson.index');
        Route::get('/modules/{id?}/lesson/create', 'LessonController@createLesson')->name('admin.lesson.create');
        Route::post('/lesson/store', 'LessonController@storeLesson')->name('admin.lesson.store');
        Route::get('/lesson/{id?}/edit', 'LessonController@editLesson')->name('admin.lesson.edit');
        Route::post('/lesson/update/{id?}', 'LessonController@updateLesson')->name('admin.lesson.update');
        Route::get('/lesson/delete/{id}', 'LessonController@deleteLesson')->name('admin.lesson.delete');
    });
});

