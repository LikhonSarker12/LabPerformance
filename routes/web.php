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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::get('/registration/admin', 'RegistrationController@getRegistrationAdmin')->name('registration.admin');
Route::get('/registration/employee', 'RegistrationController@getRegistrationEmployee')->name('registration.employee');
Route::post('/registration/admin', 'RegistrationController@postRegistrationAdmin');
Route::post('/registration/employee', 'RegistrationController@postRegistrationEmlpoyee');
Route::group(['middleware'=>['session']], function(){
	
	

	Route::group(['middleware'=>['admintype']], function(){
		Route::get('/home/admin', 'HomeController@adminIndex')->name('adminhome.index');	
		Route::get('/employee/add', 'EmployeeController@index')->name('employee.add');
		Route::post('/employee/add', 'EmployeeController@store');

		Route::get('/admin/employeelist', 'AdminController@show')->name('employee.list');
		Route::get('/employee/edit/{id}', 'AdminController@update')->name('employee.edit');

		Route::post('/employee/edit/{id}', 'HomeController@update');

		Route::get('/employee/details/{id}', 'AdminController@getupdate')->name('employee.details');
		Route::post('/employee/details/{id}', 'AdminController@update');

		Route::get('/employee/delete/{id}', 'AdminController@destroy')->name('employee.delete');

	
		});	
		Route::group(['middleware'=>['customertype']], function(){
		
			Route::get('/home/customer', 'HomeController@customerIndex')->name('home.index');
			Route::get('/medicines', 'CustomerController@index')->name('medicines.index');
			Route::get('/customer/profile', 'CustomerController@index')->name('customer.profile');
		
			Route::get('/customer/profile', 'AdminController@index')->name('customer.profile');
		
			Route::post('/deleate/custome/{id}', 'HomeController@index')->name('customer.id');
		
			});	
		
		
});
