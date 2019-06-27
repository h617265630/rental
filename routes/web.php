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
Route::get('/registCompany','CompanyController@registCompanyView');
Route::post('/registCompany','CompanyController@registCompany');
Route::get('/companyList','CompanyController@companyList');

Route::get('/registEmployee','EmployeeController@registEmployeeView');
Route::post('/registEmployee','EmployeeController@registEmployee');
Route::get('/employeeList','EmployeeController@employeeList');

Route::get('/signContract','ContractController@signContractView');
Route::post('/signContract','ContractController@signContract');
Route::get('/contractList','ContractController@contractList');

Route::get('/registRoom','RoomController@registRoomView');
Route::get('/roomList/{id}','RoomController@roomList');

Route::get('/registBuilding','BuildingController@registBuildingView');
Route::get('/getBuilding','BuildingController@getBuildings');
Route::post('/registBuilding','BuildingController@registBuilding');
Route::get('/buildingList','BuildingController@buildingList');
Route::resource('users','AdminUserController');

