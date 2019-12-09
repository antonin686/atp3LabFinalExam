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


Route::get('/', 'loginController@index');
Route::post('/', 'loginController@verify');
Route::get('/teacher', 'TeacherController@index')->name('teacher.index');
Route::get('/student/list', 'StudentController@index')->name('student.index');
Route::get('/student/add', 'StudentController@create')->name('student.add');
Route::post('/student/add', 'StudentController@store');
Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/student/edit/{id}', 'StudentController@update');
Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
Route::post('/student/delete/{id}', 'StudentController@destroy');
Route::get('/student/details/{id}', 'StudentController@show')->name('student.details');