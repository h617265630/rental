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
Route::post('/registCompany','IndexController@registCompany');
Route::get('/companyList','IndexController@companyList');

Route::get('/registEmployee','IndexController@registEmployeeView');
Route::post('/registEmployee','IndexController@registEmployee');
Route::get('/employeeList','IndexController@employeeList');

Route::get('/signContract','IndexController@signContractView');
Route::post('/signContract','IndexController@signContract');
Route::get('/contractList','IndexController@contractList');

Route::resource('users','AdminUserController');

