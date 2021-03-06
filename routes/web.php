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
Route::get('/getCompany','CompanyController@getCompany');

Route::get('/registEmployee','EmployeeController@registEmployeeView');
Route::post('/registEmployee','EmployeeController@registEmployee');
Route::get('/employeeList','EmployeeController@employeeList');

// contract
Route::get('/signContract','ContractController@signContractView');
Route::post('/signContract','ContractController@signContract');
Route::get('/contractList','ContractController@contractList');
Route::get('/getRoomSpace/{id}','ContractController@calcAvailableSpace');
Route::get('/test','ContractController@test');

Route::get('/registRoom','RoomController@registRoomView');
Route::post('/registRoom','RoomController@registRoom');
Route::get('/roomList/{id}','RoomController@roomList');
Route::get('/getRooms/{id}','RoomController@getRooms');

Route::get('/registBuilding','BuildingController@registBuildingView');
Route::get('/getBuilding','BuildingController@getBuildings');
Route::post('/registBuilding','BuildingController@registBuilding');
Route::get('/buildingList','BuildingController@buildingList');
Route::resource('users','AdminUserController');

