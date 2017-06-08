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

//mainte-complaint-type
Route::get('/admin/maintenance/complaint', 'ComplaintTypeController@index');

Route::post('/admin/maintenance/complaint/submit', 'ComplaintTypeController@add_ctype');

Route::post('/admin/maintenance/complaint/update', 'ComplaintTypeController@update_ctype');

Route::post('/admin/maintenance/complaint/delete', 'ComplaintTypeController@delete_ctype');

Route::post('/admin/maintenance/complaint/ardelete', 'ComplaintTypeController@ardelete_ctype');

//mainte-courier
Route::get('/admin/maintenance/courier', 'CourierController@index');

Route::post('/admin/maintenance/courier/submit', 'CourierController@add_courier');

Route::post('/admin/maintenance/courier/update', 'CourierController@update_courier');

Route::post('/admin/maintenance/courier/delete', 'CourierController@delete_courier');

Route::post('/admin/maintenance/courier/ardelete', 'CourierController@ardelete_courier');

//mainte-employee
Route::get('/admin/maintenance/employee', 'EmployeeController@index');

Route::post('/admin/maintenance/employee/submit', 'EmployeeController@add_employee');

Route::post('/admin/maintenance/employee/update', 'EmployeeController@update_employee');

Route::post('/admin/maintenance/employee/delete', 'EmployeeController@delete_employee');

Route::post('/admin/maintenance/employee/ardelete', 'EmployeeController@ardelete_employee');

//mainte-employee-role
Route::get('/admin/maintenance/employee/role', 'EmployeeRoleController@index');

Route::post('/admin/maintenance/employee/role/submit', 'EmployeeRoleController@add_employee');

Route::post('/admin/maintenance/employee/role/update', 'EmployeeRoleController@update_employee');

Route::post('/admin/maintenance/employee/role/delete', 'EmployeeRoleController@delete_employee');

Route::post('/admin/maintenance/employee/role/ardelete', 'EmployeeRoleController@ardelete_employee');

//mainte-inst-type
Route::get('/admin/maintenance/installment', 'InstallmentTypeController@index');

Route::post('/admin/maintenance/installment/submit', 'InstallmentTypeController@add_installment');

Route::post('/admin/maintenance/installment/update', 'InstallmentTypeController@update_installment');

Route::post('/admin/maintenance/installment/delete', 'InstallmentTypeController@delete_installment');

Route::post('/admin/maintenance/installment/ardelete', 'InstallmentTypeController@ardelete_installment');

//mainte-insurance-comp
Route::get('/admin/maintenance/insurance/company', 'InsuranceCompanyController@index');

Route::post('/admin/maintenance/insurance/company/submit', 'InsuranceCompanyController@add_inscomp');

Route::post('/admin/maintenance/insurance/company/update', 'InsuranceCompanyController@update_inscomp');

Route::post('/admin/maintenance/insurance/company/delete', 'InsuranceCompanyController@delete_inscomp');

Route::post('/admin/maintenance/insurance/company/ardelete', 'InsuranceCompanyController@ardelete_inscomp');

//mainte-policynum
Route::get('/admin/maintenance/policyno', 'PolicyNumberController@index');

Route::post('/admin/maintenance/policyno/submit', 'PolicyNumberController@add_inscomp');

Route::post('/admin/maintenance/policyno/update', 'PolicyNumberController@update_inscomp');

Route::post('/admin/maintenance/policyno/delete', 'PolicyNumberController@delete_inscomp');

Route::post('/admin/maintenance/policyno/ardelete', 'PolicyNumberController@ardelete_inscomp');

//mainte-forms
Route::get('/admin/maintenance/insurance/forms', 'FormsController@index');

Route::post('/admin/maintenance/insurance/forms/submit', 'FormsController@add_iforms');

Route::post('/admin/maintenance/insurance/forms/update', 'FormsController@update_iforms');

Route::post('/admin/maintenance/insurance/forms/delete', 'FormsController@delete_iforms');

Route::post('/admin/maintenance/insurance/forms/ardelete', 'FormsController@ardelete_iforms');

//mainte-salesagent
Route::get('/admin/maintenance/salesagent', 'SalesAgentController@index');

Route::post('/admin/maintenance/salesagent/submit', 'SalesAgentController@add_agent');

Route::post('/admin/maintenance/salesagent/update', 'SalesAgentController@update_agent');

Route::post('/admin/maintenance/salesagent/delete', 'SalesAgentController@delete_agent');

Route::post('/admin/maintenance/salesagent/ardelete', 'SalesAgentController@ardelete_agent');

//mainte-vehiclemake
Route::get('/admin/maintenance/vehicle/make', 'VehicleMakeController@index');

Route::post('/admin/maintenance/vehicle/make/submit', 'VehicleMakeController@add_vMake');

Route::post('/admin/maintenance/vehicle/make/update', 'VehicleMakeController@update_vMake');

Route::post('/admin/maintenance/vehicle/make/delete', 'VehicleMakeController@delete_vMake');

Route::post('/admin/maintenance/vehicle/make/ardelete', 'VehicleMakeController@ardelete_vMake');

//mainte-vehicletype
Route::get('/admin/maintenance/vehicle/type', 'VehicleTypeController@index');

Route::post('/admin/maintenance/vehicle/type/submit', 'VehicleTypeController@add_vType');

Route::post('/admin/maintenance/vehicle/type/update', 'VehicleTypeController@update_vType');

Route::post('/admin/maintenance/vehicle/type/delete', 'VehicleTypeController@delete_vType');

Route::post('/admin/maintenance/vehicle/type/ardelete', 'VehicleTypeController@ardelete_vType');

//mainte-vehiclemodel
Route::get('/admin/maintenance/vehicle/model', 'VehicleModelController@index');

Route::post('/admin/maintenance/vehicle/model/submit', 'VehicleModelController@add_vModel');

Route::post('/admin/maintenance/vehicle/model/update', 'VehicleModelController@update_vModel');

Route::post('/admin/maintenance/vehicle/model/delete', 'VehicleModelController@delete_vModel');

Route::post('/admin/maintenance/vehicle/model/ardelete', 'VehicleModelController@ardelete_vModel');

//mainte-vehiclelist
Route::get('/admin/maintenance/vehicle/list', 'VehicleListController@index');

Route::post('/admin/maintenance/vehicle/list/submit', 'VehicleListController@add_vList');

Route::post('/admin/maintenance/vehicle/list/update', 'VehicleListController@update_vList');

Route::post('/admin/maintenance/vehicle/list/delete', 'VehicleListController@delete_vList');

Route::post('/admin/maintenance/vehicle/list/ardelete', 'VehicleListController@ardelete_vList');

//mainte-client-ind
Route::get('/admin/maintenance/client/individual', 'ClientIndividualController@index');

Route::post('/admin/maintenance/client/individual/submit', 'ClientIndividualController@add_clientInd');

Route::post('/admin/maintenance/client/individual/update', 'ClientIndividualController@update_clientInd');

Route::post('/admin/maintenance/client/individual/delete', 'ClientIndividualController@delete_clientInd');

Route::post('/admin/maintenance/client/individual/ardelete', 'ClientIndividualController@ardelete_clientInd');

//mainte-client-company
Route::get('/admin/maintenance/client/company', 'ClientCompanyController@index');

Route::post('/admin/maintenance/client/company/submit', 'ClientCompanyController@add_clientComp');

Route::post('/admin/maintenance/client/company/update', 'ClientCompanyController@update_clientComp');

Route::post('/admin/maintenance/client/company/delete', 'ClientCompanyController@delete_clientComp');

Route::post('/admin/maintenance/client/company/ardelete', 'ClientCompanyController@ardelete_clientComp');



//TRANSACTION

//QUERIES

//REPORTS

//UTILITIES
?>