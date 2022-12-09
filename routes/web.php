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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Teacher
Route::get('/teacher_create', 'TeacherController@create')->name('teacher_create');
Route::get('/teacher_edit', 'TeacherController@edit')->name('teacher_edit');
Route::get('/teacher_list', 'TeacherController@index')->name('teacher_list');
Route::post('/teacher_store', 'TeacherController@store')->name('teacher_store');
Route::post('/teacher_update', 'TeacherController@update')->name('teacher_update');
Route::get('/teacher_delete', 'TeacherController@destroy')->name('teacher_delete');

//Studet
Route::get('/student_create', 'StudentController@create')->name('student_create');
Route::get('/student_edit', 'StudentController@edit');
Route::get('/student_list', 'StudentController@index')->name('student_list');
Route::post('/student_store', 'StudentController@store')->name('student_store');
Route::post('/student_update', 'StudentController@update')->name('student_update');
Route::get('/student_delete', 'StudentController@destroy')->name('student_delete');

//Class
Route::get('/class_create', 'ClassroomController@create')->name('class_create');
Route::get('/class_edit', 'ClassroomController@edit');
Route::get('/class_list', 'ClassroomController@index')->name('class_list');
Route::post('/class_store', 'ClassroomController@store')->name('class_store');
Route::post('/class_update', 'ClassroomController@update')->name('class_update');
Route::get('/class_delete', 'ClassroomController@destroy')->name('class_delete');

//Roles
Route::get('/role_create', 'RolesController@create')->name('role_create');
Route::get('/role_edit_user', 'RolesController@edit')->name('role_edit_user');
Route::get('/role_list', 'RolesController@index')->name('role_list');
Route::get('/user_list', 'RolesController@userIndex')->name('user_list');
Route::post('/role_store', 'RolesController@store')->name('role_store');
Route::post('/role_update', 'RolesController@update')->name('role_update');
Route::get('/role_delete', 'RolesController@destroy')->name('role_delete');

//Users
Route::get('/user_create', 'UserController@create')->name('user_create');
Route::get('/user_edit_user', 'RolesController@edit')->name('user_edit_user');
Route::post('/user_store', 'UserController@store')->name('user_store');
Route::post('/user_update', 'RolesController@update')->name('user_update');
Route::get('/user_delete', 'RolesController@destroy')->name('user_delete');

