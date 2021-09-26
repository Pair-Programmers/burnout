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
    return view('login');
});

Route::get('signout', function () {
    return view('signout');
});

Route::get('registration', function () {
    return view('registration');
});
Route::get('login', function () {
    return view('login');
});
Route::get('employeelogin', function () {
    return view('employeelogin');
});
Route::get('survey', function () {
    return view('survey');
});
Route::get('organizationResultView', function () {
    return view('organizationResultview');
});
Route::get('individualResultView', function () {
    return view('individualResultview');
});

Route::get('emailVerification', function () {
    return view('emailVerification');
});

Route::get('history', function () {
    return view('history');
});

Route::get('employerProfile', function () {
    return view('employerProfile');
});

Route::get('employeeProfile', function () {
    return view('employeeProfile');
});

Route::get('employerHome1', function () {
    return view('employerHome1');
});

Route::get('employerHome2', function () {
    return view('employerHome2');
});

Route::get('employerHome', function () {
    return view('employerHome');
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

Route::get('doneSurvey', function () {
    return view('doneSurvey');
});


/////////////////////////////////////////////////////////////

Route::get('addEmployer',"EmployerController@addEmployer");

Route::get('UpdateEmployer',"EmployerController@updateEmployer");

Route::get('UpdateEmployee',"EmployeeController@updateEmployee");

Route::get('updateEmployeePassword',"EmployeeController@updateEmployeePassword");

Route::get('disableOrEnableEmployee',"EmployeeController@disableOrEnableEmployee");

Route::get('AddEmployee',"EmployeeController@addEmployee");

Route::get('searchEmployee/{searchBarID}',"EmployeeController@searchEmployee");

Route::get('searchEmployer/{company_user_name}',"EmployerController@searchEmployer");

Route::get('employerLogin',"EmployerController@employerLogin");

Route::get('employeeLogin',"EmployeeController@employeeLogin");

Route::get('addSurvey',"SurveyController@addSurvey");

Route::get('searchEmployeeSurvey/{searchBarID}',"EmployeeController@searchEmployeeSurvey");

Route::get('getCurrentMonthSurveyData',"SurveyController@getCurrentMonthSurveyDataf");

Route::get('getSurveyHistory/{month}/{year}',"SurveyController@getSurveyHistory");

Route::get('test',"EmployeeController@updateEmployeesForNextSurvey");