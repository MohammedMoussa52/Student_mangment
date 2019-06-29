<?php

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

Auth::routes();
Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/routes', 'HomeController@admin');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile','UserController@profile');
Route::post('profile','UserController@update_avatar');
Route::get('courses/create','CourseController@create');
Route::post('/courses/join','CourseController@join');
Route::get('courses','CourseController@index');
Route::delete('/course/delete/{id}','CourseController@destroy');
