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
Route::get('/admin/maintenance/bank', 'maint_bankController@index');

Route::post('/admin/maintenance/bank/submit', 'maint_bankController@add_bank');

Route::post('/admin/maintenance/bank/update', 'maint_bankController@update_bank');

Route::post('/admin/maintenance/bank/delete', 'maint_bankController@delete_bank');

Route::post('/admin/maintenance/bank/ardelete', 'maint_bankController@ardelete_bank');

//mainte-complaint-type
Route::get('/admin/maintenance/complaint', 'maint_complaintTypeController@index');

Route::post('/admin/maintenance/complaint/submit', 'maint_complaintTypeController@add_ctype');

Route::post('/admin/maintenance/complaint/update', 'maint_complaintTypeController@update_ctype');

Route::post('/admin/maintenance/complaint/delete', 'maint_complaintTypeController@delete_ctype');

Route::post('/admin/maintenance/complaint/ardelete', 'maint_complaintTypeController@ardelete_ctype');

//mainte-courier
Route::get('/admin/maintenance/courier', 'maint_courierController@index');

Route::post('/admin/maintenance/courier/submit', 'maint_courierController@add_courier');

Route::post('/admin/maintenance/courier/update', 'maint_courierController@update_courier');

Route::post('/admin/maintenance/courier/delete', 'maint_courierController@delete_courier');

Route::post('/admin/maintenance/courier/ardelete', 'maint_courierController@ardelete_courier');

//mainte-employee
Route::get('/admin/maintenance/employee', 'maint_employeeController@index');

Route::post('/admin/maintenance/employee/submit', 'maint_employeeController@add_employee');

Route::post('/admin/maintenance/employee/update', 'maint_employeeController@update_employee');

Route::post('/admin/maintenance/employee/delete', 'maint_employeeController@delete_employee');

Route::post('/admin/maintenance/employee/ardelete', 'maint_employeeController@ardelete_employee');

//mainte-employee-role
Route::get('/admin/maintenance/employee/role', 'maint_employeeRoleController@index');

Route::post('/admin/maintenance/employee/role/submit', 'maint_employeeRoleController@add_emp_role');

Route::post('/admin/maintenance/employee/role/update', 'maint_employeeRoleController@update_emp_role');

Route::post('/admin/maintenance/employee/role/delete', 'maint_employeeRoleController@delete_emp_role');

Route::post('/admin/maintenance/employee/role/ardelete', 'maint_employeeRoleController@ardelete_emp_role');

//mainte-inst-type
Route::get('/admin/maintenance/installment', 'maint_installmentTypeController@index');

Route::post('/admin/maintenance/installment/submit', 'maint_installmentTypeController@add_installment');

Route::post('/admin/maintenance/installment/update', 'maint_installmentTypeController@update_installment');

Route::post('/admin/maintenance/installment/delete', 'maint_installmentTypeController@delete_installment');

Route::post('/admin/maintenance/installment/ardelete', 'maint_installmentTypeController@ardelete_installment');

//mainte-insurance-comp
Route::get('/admin/maintenance/insurance/company', 'maint_insuranceCompanyController@index');

Route::post('/admin/maintenance/insurance/company/submit', 'maint_insuranceCompanyController@add_inscomp');

Route::post('/admin/maintenance/insurance/company/update', 'maint_insuranceCompanyController@update_inscomp');

Route::post('/admin/maintenance/insurance/company/delete', 'maint_insuranceCompanyController@delete_inscomp');

Route::post('/admin/maintenance/insurance/company/ardelete', 'maint_insuranceCompanyController@ardelete_inscomp');

//mainte-policynum
Route::get('/admin/maintenance/policyno', 'maint_policyNumberController@index');

Route::post('/admin/maintenance/policyno/submit', 'maint_policyNumberController@add_policy');

Route::post('/admin/maintenance/policyno/update', 'maint_policyNumberController@update_policy');

Route::post('/admin/maintenance/policyno/delete', 'maint_policyNumberController@delete_policy');

Route::post('/admin/maintenance/policyno/ardelete', 'maint_policyNumberController@ardelete_policy');

//mainte-forms
Route::get('/admin/maintenance/insurance/forms', 'maint_FormsController@index');

Route::post('/admin/maintenance/insurance/forms/submit', 'maint_FormsController@add_iforms');

Route::post('/admin/maintenance/insurance/forms/update', 'maint_FormsController@update_iforms');

Route::post('/admin/maintenance/insurance/forms/delete', 'maint_FormsController@delete_iforms');

Route::post('/admin/maintenance/insurance/forms/ardelete', 'maint_FormsController@ardelete_iforms');

//mainte-salesagent
Route::get('/admin/maintenance/salesagent', 'maint_salesAgentController@index');

Route::post('/admin/maintenance/salesagent/submit', 'maint_salesAgentController@add_agent');

Route::post('/admin/maintenance/salesagent/update', 'maint_salesAgentController@update_agent');

Route::post('/admin/maintenance/salesagent/delete', 'maint_salesAgentController@delete_agent');

Route::post('/admin/maintenance/salesagent/ardelete', 'maint_salesAgentController@ardelete_agent');

//mainte-vehiclemake
Route::get('/admin/maintenance/vehicle/make', 'maint_vMakeController@index');

Route::post('/admin/maintenance/vehicle/make/submit', 'maint_vMakeController@add_vMake');

Route::post('/admin/maintenance/vehicle/make/update', 'maint_vMakeController@update_vMake');

Route::post('/admin/maintenance/vehicle/make/delete', 'maint_vMakeController@delete_vMake');

Route::post('/admin/maintenance/vehicle/make/ardelete', 'maint_vMakeController@ardelete_vMake');

//mainte-vehicletype
Route::get('/admin/maintenance/vehicle/type', 'maint_vTypeController@index');

Route::post('/admin/maintenance/vehicle/type/submit', 'maint_vTypeController@add_vType');

Route::post('/admin/maintenance/vehicle/type/update', 'maint_vTypeController@update_vType');

Route::post('/admin/maintenance/vehicle/type/delete', 'maint_vTypeController@delete_vType');

Route::post('/admin/maintenance/vehicle/type/ardelete', 'maint_vTypeController@ardelete_vType');

//mainte-vehiclemodel
Route::get('/admin/maintenance/vehicle/model', 'maint_vModelController@index');

Route::post('/admin/maintenance/vehicle/model/submit', 'maint_vModelController@add_vModel');

Route::post('/admin/maintenance/vehicle/model/update', 'maint_vModelController@update_vModel');

Route::post('/admin/maintenance/vehicle/model/delete', 'maint_vModelController@delete_vModel');

Route::post('/admin/maintenance/vehicle/model/ardelete', 'maint_vModelController@ardelete_vModel');

//mainte-vehiclelist
Route::get('/admin/maintenance/vehicle/list', 'maint_vListController@index');

Route::post('/admin/maintenance/vehicle/list/submit', 'maint_vListController@add_vList');

Route::post('/admin/maintenance/vehicle/list/update', 'maint_vListController@update_vList');

Route::post('/admin/maintenance/vehicle/list/delete', 'maint_vListController@delete_vList');

Route::post('/admin/maintenance/vehicle/list/ardelete', 'maint_vListController@ardelete_vList');

//mainte-client-ind
Route::get('/admin/maintenance/client/individual', 'maint_ClientIndividualController@index');

Route::post('/admin/maintenance/client/individual/submit', 'maint_ClientIndividualController@add_client');

Route::post('/admin/maintenance/client/individual/update', 'maint_ClientIndividualController@update_client');

Route::post('/admin/maintenance/client/individual/delete', 'maint_ClientIndividualController@delete_client');

Route::post('/admin/maintenance/client/individual/ardelete', 'maint_ClientIndividualController@ardelete_client');

//mainte-client-company
Route::get('/admin/maintenance/client/company', 'maint_ClientCompanyController@index');

Route::post('/admin/maintenance/client/company/submit', 'maint_ClientCompanyController@add_client_comp');

Route::post('/admin/maintenance/client/company/update', 'maint_ClientCompanyController@update_client_comp');

Route::post('/admin/maintenance/client/company/delete', 'maint_ClientCompanyController@delete_client_comp');

Route::post('/admin/maintenance/client/company/ardelete', 'maint_ClientCompanyController@ardelete_client_comp');

//mainte-auto-pa-premium
Route::get('/admin/maintenance/personal-accident', 'maint_pAutoController@index');

Route::post('/admin/maintenance/personal-accident/submit', 'maint_pAutoController@add_premiumPA');

Route::post('/admin/maintenance/personal-accident/update', 'maint_pAutoController@update_premiumPA');

Route::post('/admin/maintenance/personal-accident/delete', 'maint_pAutoController@delete_premiumPA');

Route::post('/admin/maintenance/personal-accident/ardelete', 'maint_pAutoController@ardelete_premiumPA');

//mainte-bodily-injury-premium
Route::get('/admin/maintenance/bodily-injury', 'maint_pBodilyInjuryController@index');

Route::post('/admin/maintenance/bodily-injury/submit', 'maint_pBodilyInjuryController@add_premiumDG');

Route::post('/admin/maintenance/bodily-injury/update', 'maint_pBodilyInjuryController@update_premiumDG');

Route::post('/admin/maintenance/bodily-injury/delete', 'maint_pBodilyInjuryController@delete_premiumdG');

Route::post('/admin/maintenance/bodily-injury/ardelete', 'maint_pBodilyInjuryController@ardelete_premiumDG');

//mainte-property-damage-premium
Route::get('/admin/maintenance/property-damage', 'maint_pPropertyDamageController@index');

Route::post('/admin/maintenance/property-damage/submit', 'maint_pPropertyDamageController@add_premiumDG');

Route::post('/admin/maintenance/property-damage/update', 'maint_pPropertyDamageController@update_premiumDG');

Route::post('/admin/maintenance/property-damage/delete', 'maint_pPropertyDamageController@delete_premiumdG');

Route::post('/admin/maintenance/property-damage/ardelete', 'maint_pPropertyDamageController@ardelete_premiumDG');

//TRANSACTION
//Insurance
Route::get('/admin/transaction/adm/insurance', function (){
   return view('pages.transaction.adm.insurance');
});

//Insurance - Notify Client
Route::get('/admin/transaction/adm/insurance-notify-client', function (){
   return view('pages.transaction.adm.insurance-notify-client');
});

//Insurance - Client Info
Route::get('/admin/transaction/adm/insurance-client-info-fpg', function (){
   return view('pages.transaction.adm.insurance-client-info-fpg');
});


//Insurance - Expiring Accounts
Route::get('/admin/transaction/adm/insurance-expiring-accounts', function (){
   return view('pages.transaction.adm.insurance-expiring-accounts');
});

//Insurance - Sent notifications
Route::get('/admin/transaction/adm/insurance-notification-list', function (){
   return view('pages.transaction.adm.insurance-notification-list');
});

//Claims
Route::get('/admin/transaction/adm/claims', function (){
   return view('pages.transaction.adm.claims');
});

//Claims - claim request
Route::get('/admin/transaction/adm/claim-request', function (){
   return view('pages.transaction.adm.claim-request');
});

//Claims - validate
Route::get('/admin/transaction/adm/claim-validate', function (){
   return view('pages.transaction.adm.claim-validate');
});

//Claims - request info
Route::get('/admin/transaction/adm/claim-info', function (){
   return view('pages.transaction.adm.claim-info');
});

//Claims - approved info
Route::get('/admin/transaction/adm/claim-info-approved', function (){
   return view('pages.transaction.adm.claim-info-approved');
});

//Complaint
Route::get('/admin/transaction/adm/complaint', function (){
   return view('pages.transaction.adm.complaint');
});

//Complaint-info
Route::get('/admin/transaction/adm/complaint-info', function (){
   return view('pages.transaction.adm.complaint-info');
});

//Complaint-validate
Route::get('/admin/transaction/adm/complaint-validate', function (){
   return view('pages.transaction.adm.complaint-validate');
});

//Tally
Route::get('/admin/transaction/adm/tally', function (){
   return view('pages.transaction.adm.tally');
});

//Tally
Route::get('/admin/transaction/adm/tally-info', function (){
   return view('pages.transaction.adm.tally-info');
});

//Transmittal
Route::get('/admin/transaction/adm/transmittal', function (){
   return view('pages.transaction.adm.transmittal');
});

//Transmittal - documents
Route::get('/admin/transaction/adm/transmittal-documents', function (){
   return view('pages.transaction.adm.transmittal-documents');
});

//Transmittal - request
Route::get('/admin/transaction/adm/transmittal-request', function (){
   return view('pages.transaction.adm.transmittal-request');
});

//Transmittal - validate
Route::get('/admin/transaction/adm/transmittal-validate', function (){
   return view('pages.transaction.adm.transmittal-validate');
});

//Transmittal - info
Route::get('/admin/transaction/adm/transmittal-info-approved', function (){
   return view('pages.transaction.adm.transmittal-info-approved');
});

//QUERIES
Route::get('/admin/queries/most-active-company-client', 'z_Queries_activeCompanyClientController@index');

Route::get('/admin/queries/most-active-individual-client', 'z_Queries_activeIndividualClientController@index');

Route::get('/admin/queries/complaint-insurance', 'z_Queries_complaintInsuranceController@index');

Route::get('/admin/queries/complaint-type', 'z_Queries_complaintTypeController@index');

Route::get('/admin/queries/top-company-client', 'z_Queries_topCompanyClientController@index');

Route::get('/admin/queries/top-individual-client', 'z_Queries_topIndividualClientController@index');

Route::get('/admin/queries/top-insurance-company', 'z_Queries_topInsuranceCompanyController@index');

Route::get('/admin/queries/top-insured-vehicle', 'z_Queries_topInsuredVehicleController@index');

Route::get('/admin/queries/top-sales-agent', 'z_Queries_topmaint_salesAgentController@index');

//REPORTS

//UTILITIES
Route::get('/admin/utilities/adm/archives', 'z_Utilities_ArchivesController@index');

Route::post('/admin/utilities/archives/bank/reactivate', 'z_Utilities_ArchivesController@reactivate_bank');

Route::post('/admin/utilities/archives/bank/arreactivate', 'z_Utilities_ArchivesController@arreactivate_bank');

Route::post('/admin/utilities/archives/client/individual/reactivate', 'z_Utilities_ArchivesController@reactivate_client');

Route::post('/admin/utilities/archives/client/individual/arreactivate', 'z_Utilities_ArchivesController@arreactivate_client');

Route::post('/admin/utilities/archives/client/company/reactivate', 'z_Utilities_ArchivesController@reactivate_client_company');

Route::post('/admin/utilities/archives/client/company/arreactivate', 'z_Utilities_ArchivesController@arreactivate_client_company');

Route::post('/admin/utilities/archives/employee/role/reactivate', 'z_Utilities_ArchivesController@reactivate_employee_role');

Route::post('/admin/utilities/archives/employee/role/arreactivate', 'z_Utilities_ArchivesController@arreactivate_employee_role');

Route::post('/admin/utilities/archives/employee/reactivate', 'z_Utilities_ArchivesController@reactivate_employee');

Route::post('/admin/utilities/archives/employee/arreactivate', 'z_Utilities_ArchivesController@arreactivate_employee');

Route::post('/admin/utilities/archives/salesagent/reactivate', 'z_Utilities_ArchivesController@reactivate_agent');

Route::post('/admin/utilities/archives/salesagent/arreactivate', 'z_Utilities_ArchivesController@arreactivate_agent');

Route::post('/admin/utilities/archives/courier/reactivate', 'z_Utilities_ArchivesController@reactivate_courier');

Route::post('/admin/utilities/archives/courier/arreactivate', 'z_Utilities_ArchivesController@arreactivate_courier');

Route::post('/admin/utilities/archives/vehicle/type/reactivate', 'z_Utilities_ArchivesController@reactivate_vehicle_type');

Route::post('/admin/utilities/archives/vehicle/type/arreactivate', 'z_Utilities_ArchivesController@arreactivate_vehicle_type');

Route::post('/admin/utilities/archives/vehicle/make/reactivate', 'z_Utilities_ArchivesController@reactivate_vehicle_make');

Route::post('/admin/utilities/archives/vehicle/make/arreactivate', 'z_Utilities_ArchivesController@arreactivate_vehicle_make');

Route::post('/admin/utilities/archives/vehicle/model/reactivate', 'z_Utilities_ArchivesController@reactivate_vehicle_model');

Route::post('/admin/utilities/archives/vehicle/model/arreactivate', 'z_Utilities_ArchivesController@arreactivate_vehicle_model');

Route::post('/admin/utilities/archives/policynumber/reactivate', 'z_Utilities_ArchivesController@reactivate_policynumber');

Route::post('/admin/utilities/archives/policynumber/arreactivate', 'z_Utilities_ArchivesController@arreactivate_policynumber');

Route::post('/admin/utilities/archives/installment/reactivate', 'z_Utilities_ArchivesController@reactivate_installment');

Route::post('/admin/utilities/archives/installment/arreactivate', 'z_Utilities_ArchivesController@arreactivate_installment');

Route::post('/admin/utilities/archives/complaint/type/reactivate', 'z_Utilities_ArchivesController@reactivate_complaint_type');

Route::post('/admin/utilities/archives/complaint/type/arreactivate', 'z_Utilities_ArchivesController@arreactivate_complaint_type');

Route::post('/admin/utilities/archives/personal-accident/reactivate', 'z_Utilities_ArchivesController@reactivate_personal_accident');

Route::post('/admin/utilities/archives/personal-accident/arreactivate', 'z_Utilities_ArchivesController@arreactivate_personal_accident');

Route::post('/admin/utilities/archives/premium-damage/reactivate', 'z_Utilities_ArchivesController@reactivate_premium_damage');

Route::post('/admin/utilities/archives/premium-damage/arreactivate', 'z_Utilities_ArchivesController@arreactivate_premium_damage');


Route::get('/admin/utilities/adm/computationSettings', 'z_Utilities_ComputationSettingsController@index');

Route::get('/admin/utilities/adm/generalSettings', 'z_Utilities_GeneralSettingsController@index');

Route::get('/admin/utilities/adm/taxSettings', 'z_Utilities_TaxSettingsController@index');

Route::get('/admin/utilities/adm/templates', 'z_Utilities_TemplatesController@index');
?>