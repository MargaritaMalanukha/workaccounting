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

/**
 * Show forms for authorization and registration.
 */

Route::get('/login', function () { return view('login');});
Route::get('/register', function (){ return view('registration');});

/**
 * Login or register user.
 */

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/register', 'App\Http\Controllers\AuthController@register');

/**
 * Dashboard page and timesheets page.
 */

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('/timesheets', 'App\Http\Controllers\TimesheetController@index');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

/**
 * Resource controllers for CRUD operations on next tables
 * (Subdivisions, Employees, Absents, Vacations, BusinessTrips, Hospitals)
 */

Route::resource('/subdivisions', 'App\Http\Controllers\SubdivisionController');
Route::resource('/employees', 'App\Http\Controllers\EmployeeController');
Route::resource('/absents', 'App\Http\Controllers\AbsentController');
Route::resource('/vacations', 'App\Http\Controllers\VacationController');
Route::resource('/businesstrips', 'App\Http\Controllers\BusinessTripController');
Route::resource('/hospitals', 'App\Http\Controllers\HospitalController');
