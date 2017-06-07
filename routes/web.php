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

//DASHBOARD
Route::get('/admin/dashboard', function (){
   return view('cimis');
});

//Logins
Route::get('/sign-in', 'SignInController@index');

Route::post('/sign-in/login', 'SignInController@Signin');

Route::get('/sign-up', 'SignUpController@index');

Route::post('/sign-up/submit', 'SignUpController@create_account');


//MAINTENANCE

//mainte-bank
Route::get('/admin/maintenance/bank', 'BankController@index');

Route::post('/admin/maintenance/bank/submit', 'BankController@add_bank');

Route::post('/admin/maintenance/bank/update', 'BankController@update_bank');

Route::post('/admin/maintenance/bank/delete', 'BankController@delete_bank');

Route::post('/admin/maintenance/bank/ardelete', 'BankController@ardelete_bank');

//mainte-client-company
/*Route::get('/admin/maintenance/client/company', 'ClientCompanyController@index');

Route::post('/admin/maintenance/bank/submit', 'ClientCompanyController@add_bank');

Route::post('/admin/maintenance/bank/update', 'ClientCompanyController@update_bank');

Route::post('/admin/maintenance/bank/delete', 'ClientCompanyController@delete_bank');

Route::post('/admin/maintenance/bank/ardelete', 'ClientCompanyController@ardelete_bank');*/

//mainte-complaint-type
Route::get('/admin/maintenance/complaint', 'ComplaintTypeController@index');

Route::post('/admin/maintenance/complaint/submit', 'ComplaintTypeController@add_bank');

Route::post('/admin/maintenance/complaint/update', 'ComplaintTypeController@update_bank');

Route::post('/admin/maintenance/complaint/delete', 'ComplaintTypeController@delete_bank');

Route::post('/admin/maintenance/complaint/ardelete', 'ComplaintTypeController@ardelete_bank');

//mainte-courier
Route::get('/admin/maintenance/courier', 'CourierController@index');

Route::post('/admin/maintenance/courier/submit', 'CourierController@add_bank');

Route::post('/admin/maintenance/courier/update', 'CourierController@update_bank');

Route::post('/admin/maintenance/courier/delete', 'CourierController@delete_bank');

Route::post('/admin/maintenance/courier/ardelete', 'CourierController@ardelete_bank');

//mainte-employee
Route::get('/admin/maintenance/employee', 'EmployeeController@index');

Route::post('/admin/maintenance/employee/submit', 'EmployeeController@add_bank');

Route::post('/admin/maintenance/employee/update', 'EmployeeController@update_bank');

Route::post('/admin/maintenance/employee/delete', 'EmployeeController@delete_bank');

Route::post('/admin/maintenance/employee/ardelete', 'EmployeeController@ardelete_bank');

//mainte-employee-role
Route::get('/admin/maintenance/employee/role', 'EmployeeRoleController@index');

Route::post('/admin/maintenance/employee/role/submit', 'EmployeeRoleController@add_bank');

Route::post('/admin/maintenance/employee/role/update', 'EmployeeRoleController@update_bank');

Route::post('/admin/maintenance/employee/role/delete', 'EmployeeRoleController@delete_bank');

Route::post('/admin/maintenance/employee/role/ardelete', 'EmployeeRoleController@ardelete_bank');

//mainte-inst-type
Route::get('/admin/maintenance/installment', 'InstallmentTypeController@index');

Route::post('/admin/maintenance/installment/submit', 'InstallmentTypeController@add_bank');

Route::post('/admin/maintenance/installment/update', 'InstallmentTypeController@update_bank');

Route::post('/admin/maintenance/installment/delete', 'InstallmentTypeController@delete_bank');

Route::post('/admin/maintenance/installment/ardelete', 'InstallmentTypeController@ardelete_bank');

//mainte-insurance-comp
Route::get('/admin/maintenance/insurance/company', 'InsuranceCompanyController@index');

Route::post('/admin/maintenance/insurance/company/submit', 'InsuranceCompanyController@add_bank');

Route::post('/admin/maintenance/insurance/company/update', 'InsuranceCompanyController@update_bank');

Route::post('/admin/maintenance/insurance/company/delete', 'InsuranceCompanyController@delete_bank');

Route::post('/admin/maintenance/insurance/company/ardelete', 'InsuranceCompanyController@ardelete_bank');

//mainte-policynum
Route::get('/admin/maintenance/policyno', 'PolicyNumberController@index');

Route::post('/admin/maintenance/policyno/submit', 'PolicyNumberController@add_bank');

Route::post('/admin/maintenance/policyno/update', 'PolicyNumberController@update_bank');

Route::post('/admin/maintenance/policyno/delete', 'PolicyNumberController@delete_bank');

Route::post('/admin/maintenance/policyno/ardelete', 'PolicyNumberController@ardelete_bank');

//mainte-salesagent
Route::get('/admin/maintenance/salesagent', 'SalesAgentController@index');

Route::post('/admin/maintenance/salesagent/submit', 'SalesAgentController@add_bank');

Route::post('/admin/maintenance/salesagent/update', 'SalesAgentController@update_bank');

Route::post('/admin/maintenance/salesagent/delete', 'SalesAgentController@delete_bank');

Route::post('/admin/maintenance/salesagent/ardelete', 'SalesAgentController@ardelete_bank');

//mainte-vehiclemake
Route::get('/admin/maintenance/vehicle/make', 'VehicleMakeController@index');

Route::post('/admin/maintenance/vehicle/make/submit', 'VehicleMakeController@add_bank');

Route::post('/admin/maintenance/vehicle/make/update', 'VehicleMakeController@update_bank');

Route::post('/admin/maintenance/vehicle/make/delete', 'VehicleMakeController@delete_bank');

Route::post('/admin/maintenance/vehicle/make/ardelete', 'VehicleMakeController@ardelete_bank');

//mainte-vehicletype
Route::get('/admin/maintenance/vehicle/type', 'VehicleTypeController@index');

Route::post('/admin/maintenance/vehicle/type/submit', 'VehicleTypeController@add_bank');

Route::post('/admin/maintenance/vehicle/type/update', 'VehicleTypeController@update_bank');

Route::post('/admin/maintenance/vehicle/type/delete', 'VehicleTypeController@delete_bank');

Route::post('/admin/maintenance/vehicle/type/ardelete', 'VehicleTypeController@ardelete_bank');

//mainte-vehiclemodel
Route::get('/admin/maintenance/vehicle/model', 'VehicleModelController@index');

Route::post('/admin/maintenance/vehicle/model/submit', 'VehicleModelController@add_bank');

Route::post('/admin/maintenance/vehicle/model/update', 'VehicleModelController@update_bank');

Route::post('/admin/maintenance/vehicle/model/delete', 'VehicleModelController@delete_bank');

Route::post('/admin/maintenance/vehicle/model/ardelete', 'VehicleModelController@ardelete_bank');


//TRANSACTION

//QUERIES

//REPORTS

//UTILITIES
?>