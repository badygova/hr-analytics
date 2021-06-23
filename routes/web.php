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

Route::resource('employee', 'EmployeeController');

Route::post('employees/{id}', 'EmployeeController@update');
Route::post('employee/{id}/delete', 'EmployeeController@destroy');
Route::post('employee/{id}/image', 'EmployeeController@storeImage');

Route::resource('team', 'TeamController');

Route::post('teams/{id}', 'TeamController@update');
Route::post('team/{id}/delete', 'TeamController@destroy');

Route::resource('rating', 'RatingController');

Route::post('ratings/{id}', 'RatingController@update');
Route::post('rating/{id}/delete', 'RatingController@destroy');

Route::get('/reports', 'ReportController@index');

Route::get('employees/export', 'EmployeeController@export');
Route::get('ratings/export', 'RatingController@export');
Route::get('teams/export', 'TeamController@export');

Route::get('progress', 'ChartController@chart');
Route::get('attrition', 'ChartController@attrition');
