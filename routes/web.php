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

Route::get('/','IndexController@index');
Route::get('/registCompany','IndexController@registCompanyView');
Route::get('/registEmployee','IndexController@registEmployeeView');
Route::get('/signContract','IndexController@signContractView');

Route::resource('users','AdminUserController');

