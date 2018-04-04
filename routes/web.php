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
Route::post('/clinics', 'ClinicController@store');
Route::get('/clinic/{id}', 'ClinicController@view');

// Employee routes
Route::get('/employees', 'EmployeeController@index');
Route::post('/employees', 'EmployeeController@store');
Route::get('/employee/{id}', 'EmployeeController@view');

// Owner routes
Route::get('/owners', 'OwnerController@index');
Route::get('/owner/{id}', 'OwnerController@single');
Route::get('/register-owner', function(){
	return view('register-owner');
});
Route::post('/owners', 'OwnerController@store');
Route::post('/owners{id}', 'OwnerController@update');

// Animals controller
Route::get('/animals', 'AnimalController@index');
Route::get('/register-animal', 'AnimalController@store');
Route::get('/animal/{id}', 'AnimalController@view');
Route::post('/animals', 'AnimalController@store');
Route::delete('/animals', 'AnimalController@delete');
Route::post('/delete-animal', 'AnimalController@delete');
Route::post('/update-animal', 'AnimalController@update');

// Exam controller
Route::get('/exams', 'ExamController@index');
Route::get('/conduct-exam', 'ExamController@view');
Route::post('/exams', 'ExamController@store');
Route::post('/exams{id}', 'ExamController@update');

// Results controller
Route::get('/results', 'ResultController@index');
Route::get('/treatment-recommendation', function(){
	return view('treatment-recommendation');
});
Route::post('/results', 'ResultController@store');
Route::post('/results{id}', 'ResultController@update');

// Treatments controller (Static table)
Route::get('/treatments', 'TreatmentController@index');



