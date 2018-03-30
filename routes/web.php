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
    return view('home');
});

// Clinic routes
Route::get('/clinics', 'ClinicController@index');

// Employee routes
Route::get('/employees', 'EmployeeController@index');

// Owner routes
Route::get('/owners', 'OwnerController@index');

// Animals controller
Route::get('/animals', 'AnimalController@index');

// Exam controller
Route::get('/exams', 'ExamController@index');

// Results controller
Route::get('/results', 'ResultController@index');