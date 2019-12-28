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

Route::get('/', 'HomeController@index');
Route::get('test', 'HomeController@test');


Route::get('addDepartment','DepartmentController@create');
Route::post('addDepartment','DepartmentController@store');
Route::get('editDepartment/{id}', 'DepartmentController@edit');
Route::get('deleteDepartment/{id}', 'DepartmentController@destroy');
Route::post('editDepartment/{id}', 'DepartmentController@update');
Route::get('showDepartment','DepartmentController@index');
Route::get('getComponents/{treatment}/{user}','HomeController@getComponents')->name('getComponents');
Route::get('getCustomers/{customer}','CustomerController@getCustomers')->name('getCustomers');
Route::get('checkId/{customer}','CustomerController@checkId')->name('checkId');
Route::get('map',function (){
});

Route::get('form',function (){
   return view('form');
});
