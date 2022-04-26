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

Route::get('/registration', function () {
    return view('registration');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/employeelogin', function () {
    return view('employeelogin');
});
Route::get('/survey', function () {
    return view('survey');
});
Route::get('/organizationResultView', function () {
    return view('organizationResultView');
});
Route::get('/individualResultView', function () {
    return view('individualResultView');
});
Route::get('addEmployee', function () {
    return view('addEmployee');
});

Route::get('updateEmployee', function () {
    return view('updateEmployee');
});

Route::get('deleteEmployee', function () {
    return view('deleteEmployee');
});
