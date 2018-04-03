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
Route::post('/clinics{id}', 'ClinicController@update');
Route::get('/request1', 'ClinicController@request1');
Route::get('/request6', 'ClinicController@request6');

// Employee routes
Route::get('/employees', 'EmployeeController@index');
Route::post('/employees', 'EmployeeController@store');
Route::post('/employees{id}', 'EmployeeController@update');
Route::get('/request6', 'EmployeeController@request6');
Route::get('/request9', 'EmployeeController@request9');
Route::get('/request11', 'EmployeeController@request11');

// Owner routes
Route::get('/owners', 'OwnerController@index');
Route::get('/register-owner', function(){
	return view('register-owner');
});
Route::post('/owners', 'OwnerController@store');
Route::post('/owners{id}', 'OwnerController@update');
Route::get('/request3', 'OwnerController@request3');
Route::get('/request10', 'OwnerController@request10');
Route::get('/request12', 'OwnerController@request12');
Route::get('/request13', 'OwnerController@request13');

// Animals controller
Route::get('/animals', 'AnimalController@index');
Route::get('/register-animal', 'AnimalController@store');
Route::post('/animals', 'AnimalController@store');
Route::delete('/animals', 'AnimalController@delete');
Route::post('/delete-animal', 'AnimalController@delete');
Route::post('/update-animal', 'AnimalController@update');
Route::get('/request2', 'AnimalController@request2');
Route::get('/request4', 'AnimalController@request4');
Route::get('/request7', 'AnimalController@request7');
Route::get('/request15', 'AnimalController@request15');

// Exam controller
Route::get('/exams', 'ExamController@index');
Route::get('/conduct-exam', function(){
	return view('conduct-exam');
});
Route::post('/exams', 'ExamController@store');
Route::post('/exams{id}', 'ExamController@update');
Route::get('/request5', 'ExamController@request5');
Route::get('/request8', 'ExamController@request8');
Route::get('/request14', 'ExamController@request14');

// Results controller
Route::get('/results', 'ResultController@index');
Route::get('/treatment-recommendation', function(){
	return view('treatment-recommendation');
});
Route::post('/results', 'ResultController@store');
Route::post('/results{id}', 'ResultController@update');

// Treatments controller (Static table)
Route::get('/treatments', 'TreatmentController@index');



