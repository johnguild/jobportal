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


Auth::routes();
Route::get('register', function(){
    return redirect('/');
});

Route::get('/', 'HomeController@index');

Route::get('api/login', 'UserController@login');
Route::get('api/register/employer', 'UserController@registerEmployer');
Route::post('api/register/employer', 'UserController@storeEmployer');
Route::get('api/register/applicant', 'UserController@registerApplicant');
Route::post('api/register/applicant', 'UserController@storeApplicant');

// lets handle httpRequestNotfound
Route::get('/{wildcard}', function(){
  return redirect('/');
})->where(['wildcard' => '.*']);
