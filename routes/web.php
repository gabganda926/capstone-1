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

//DASHBOARD - Accounting Staff
Route::get('/accounting-staff/dashboard', function (){
   return view('cimis-accounting-staff');
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

//MAINTE - ClaimType
Route::get('/admin/maintenance/claim-type', 'maint_claimTypeController@index');

Route::post('/admin/maintenance/claim-type/submit', 'maint_claimTypeController@add_claim_type');

Route::post('/admin/maintenance/claim-type/update', 'maint_claimTypeController@update_claim_type');

Route::post('/admin/maintenance/claim-type/delete', 'maint_claimTypeController@delete_claim_type');

Route::post('/admin/maintenance/claim-type/ardelete', 'maint_claimTypeController@ardelete_claim_type');

//MAINTE - ClaimRequirement
Route::get('/admin/maintenance/claim-requirement', 'maint_claimRequirementsController@index');

Route::post('/admin/maintenance/claim-requirement/submit', 'maint_claimRequirementsController@add_claim_requirements');

Route::post('/admin/maintenance/claim-requirement/update', 'maint_claimRequirementsController@update_claim_requirements');

Route::post('/admin/maintenance/claim-requirement/delete', 'maint_claimRequirementsController@delete_claim_requirements');

Route::post('/admin/maintenance/claim-requirement/ardelete', 'maint_claimRequirementsController@ardelete_claim_requirements');

//MAINTE - Transmittal
Route::get('/admin/maintenance/transmittal', 'maint_transmittalController@index');

Route::post('/admin/maintenance/transmittal/submit', 'maint_transmittalController@add_transmittal_record');

Route::post('/admin/maintenance/transmittal/update', 'maint_transmittalController@update_transmittal_record');

Route::post('/admin/maintenance/transmittal/delete', 'maint_transmittalController@delete_transmittal_record');

Route::post('/admin/maintenance/transmittal/ardelete', 'maint_transmittalController@ardelete_transmittal_record');

//TRANSACTION
//Insurance - individual
Route::get('/admin/transaction/adm/insurance-individual', function (){
   return view('pages.transaction.adm.insurance-individual');
});

//Insurance - company
Route::get('/admin/transaction/adm/insurance-company', function (){
   return view('pages.transaction.adm.insurance-company');
});

//Insurance - Client Info individual
Route::get('/admin/transaction/adm/insurance-details-individual', function (){
   return view('pages.transaction.adm.insurance-details-individual');
});

//Insurance - Client Info company
Route::get('/admin/transaction/adm/insurance-details-company', function (){
   return view('pages.transaction.adm.insurance-details-company');
});


//Insurance - Expiring Accounts - Company
Route::get('/admin/transaction/adm/insurance-expiring-accounts-company', function (){
   return view('pages.transaction.adm.insurance-expiring-accounts-company');
});

//Insurance - Expiring Accounts - Individual
Route::get('/admin/transaction/adm/insurance-expiring-accounts-individual', function (){
   return view('pages.transaction.adm.insurance-expiring-accounts-individual');
});

//Insurance - Sent notifications - Company
Route::get('/admin/transaction/adm/insurance-notification-list-company', function (){
   return view('pages.transaction.adm.insurance-notification-list-company');
});

//Insurance - Sent notifications - Individual
Route::get('/admin/transaction/adm/insurance-notification-list-individual', function (){
   return view('pages.transaction.adm.insurance-notification-list-individual');
});

//Insurance - Settings - Individual
Route::get('/admin/transaction/adm/insurance-settings-individual', function (){
   return view('pages.transaction.adm.insurance-settings-individual');
});

//Insurance - Settings - Individual
Route::get('/admin/transaction/adm/insurance-settings-company', function (){
   return view('pages.transaction.adm.insurance-settings-company');
});

//Endorsement
Route::get('/admin/transaction/adm/endorsement', function (){
   return view('pages.transaction.adm.endorsement');
});

//Claims - walkin
Route::get('/admin/transaction/adm/claim-request-walkin', function (){
   return view('pages.transaction.adm.claim-request-walkin');
});

//Claims - online
Route::get('/admin/transaction/adm/claim-request-online', function (){
   return view('pages.transaction.adm.claim-request-online');
});

//Claims - CREATE REQ walkin
Route::get('/admin/transaction/adm/claim-create-request-walkin', function (){
   return view('pages.transaction.adm.claim-create-request-walkin');
});

//Claims details walkin
Route::get('/admin/transaction/adm/claim-details-walkin', function (){
   return view('pages.transaction.adm.claim-details-walkin');
});

//Claims details online
Route::get('/admin/transaction/adm/claim-details-online', function (){
   return view('pages.transaction.adm.claim-details-online');
});


//Complaint - online
Route::get('/admin/transaction/adm/complaint-online', function (){
   return view('pages.transaction.adm.complaint-online');
});

//Complaint - ended
Route::get('/admin/transaction/adm/complaint-ended', function (){
   return view('pages.transaction.adm.complaint-ended');
});

//Complaint-info
Route::get('/admin/transaction/adm/complaint-details', function (){
   return view('pages.transaction.adm.complaint-details');
});

//Complaint-auto-reply
Route::get('/admin/transaction/adm/complaint-auto-reply', function (){
   return view('pages.transaction.adm.complaint-auto-reply');
});


//Transmittal
Route::get('/admin/transaction/adm/transmittal', function (){
   return view('pages.transaction.adm.transmittal');
});

//Transmittal - progress
Route::get('/admin/transaction/adm/transmittal-progress', function (){
   return view('pages.transaction.adm.transmittal-progress');
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
Route::get('/admin/transaction/adm/transmittal-info-request', function (){
   return view('pages.transaction.adm.transmittal-info-request');
});

//Transmittal - info
Route::get('/admin/transaction/adm/transmittal-info-approved', function (){
   return view('pages.transaction.adm.transmittal-info-approved');
});

//Transmittal - ended
Route::get('/admin/transaction/adm/transmittal-ended', function (){
   return view('pages.transaction.adm.transmittal-ended');
});

//Transmittal - auto-reply
Route::get('/admin/transaction/adm/transmittal-auto-reply', function (){
   return view('pages.transaction.adm.transmittal-auto-reply');
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
//Tally
Route::get('/admin/reports/adm/tally', function (){
   return view('pages.report.adm.tally');
});

//Tally
Route::get('/admin/reports/adm/tally-info', function (){
   return view('pages.report.adm.tally-info');
});

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


//ACCOUNTING STAFF////////////////////////////////////////////////////////////

//MAINTENANCE

//INDIVIDUAL CLIENT
Route::get('/admin/maintenance/accounting-staff/client/individual', function (){
   return view('pages.maintenance.accounting staff.clientIndividual');
});

Route::get('/admin/maintenance/accounting-staff/client/company', function (){
   return view('pages.maintenance.accounting staff.clientCompany');
});

//TRANSACTIONS/////////////////////////////////////////
//trans-client-ind
Route::get('/admin/transaction/accounting-staff/client/individual', 'trans_ClientIndividualController@index');

Route::post('/admin/transaction/accounting-staff/client/individual/submit', 'trans_ClientIndividualController@add_client');

Route::post('/admin/transaction/accounting-staff/client/individual/update', 'trans_ClientIndividualController@update_client');

Route::post('/admin/transaction/accounting-staff/client/individual/delete', 'trans_ClientIndividualController@delete_client');

Route::post('/admin/transaction/accounting-staff/client/individual/ardelete', 'trans_ClientIndividualController@ardelete_client');

//trans-client-company
Route::get('/admin/transaction/accounting-staff/client/company', 'trans_ClientCompanyController@index');

Route::post('/admin/transaction/accounting-staff/client/company/submit', 'trans_ClientCompanyController@add_client_comp');

Route::post('/admin/transaction/accounting-staff/client/company/update', 'trans_ClientCompanyController@update_client_comp');

Route::post('/admin/transaction/accounting-staff/client/company/delete', 'trans_ClientCompanyController@delete_client_comp');

Route::post('/admin/transaction/accounting-staff/client/company/ardelete', 'trans_ClientCompanyController@ardelete_client_comp');

//Insure Client
Route::get('/admin/transaction/accounting-staff/insure-client', function (){
   return view('pages.transaction.accounting staff.insure-client');
});

//Payment Details
Route::get('/admin/transaction/accounting-staff/payment-details', function (){
   return view('pages.transaction.accounting staff.payment-details');
});

//Insurance Accounts - Individual
Route::get('/admin/transaction/accounting-staff/insurance-individual', function (){
   return view('pages.transaction.accounting staff.insurance-individual');
});

//Insurance Accounts - Company
Route::get('/admin/transaction/accounting-staff/insurance-company', function (){
   return view('pages.transaction.accounting staff.insurance-company');
});

//Insurance - Client Info individual
Route::get('/admin/transaction/accounting-staff/insurance-details-individual', function (){
   return view('pages.transaction.accounting staff.insurance-details-individual');
});

//Insurance - Client Info company
Route::get('/admin/transaction/accounting-staff/insurance-details-company', function (){
   return view('pages.transaction.accounting staff.insurance-details-company');
});


//Insurance - Expiring Accounts - Company
Route::get('/admin/transaction/accounting-staff/insurance-expiring-accounts-company', function (){
   return view('pages.transaction.accounting staff.insurance-expiring-accounts-company');
});

//Insurance - Expiring Accounts - Individual
Route::get('/admin/transaction/accounting-staff/insurance-expiring-accounts-individual', function (){
   return view('pages.transaction.accounting staff.insurance-expiring-accounts-individual');
});

//Quotation Online Request
Route::get('/admin/transaction/accounting-staff/quotation-online', function (){
   return view('pages.transaction.accounting staff.quotation-online');
});

//Quotation Online AUTO REPLY
Route::get('/admin/transaction/accounting-staff/quotation-online-auto-reply', function (){
   return view('pages.transaction.accounting staff.quotation-online-auto-reply');
});

//Quotation Request INDIVIDUAL DETAILS
Route::get('/admin/transaction/accounting-staff/quotation-individual-details', function (){
   return view('pages.transaction.accounting staff.quotation-individual-details');
});

//Quotation Request COMPANY DETAILS
Route::get('/admin/transaction/accounting-staff/quotation-company-details', function (){
   return view('pages.transaction.accounting staff.quotation-company-details');
});

//Quotation Walkin Request
Route::get('/admin/transaction/accounting-staff/quotation-walkin', function (){
   return view('pages.transaction.accounting staff.quotation-walkin');
});

//Quotation LIST
Route::get('/admin/transaction/accounting-staff/quotation-list', function (){
   return view('pages.transaction.accounting staff.quotation-list');
});

//Renew Client
Route::get('/admin/transaction/accounting-staff/renew-client', function (){
   return view('pages.transaction.accounting staff.renew-client');
});

//PAYMENT
Route::get('/admin/transaction/accounting-staff/payment', function (){
   return view('pages.transaction.accounting staff.payment');
});

//PAYMENT-VIEW online
Route::get('/admin/transaction/accounting-staff/payment-view', function (){
   return view('pages.transaction.accounting staff.payment-view');
});

//PAYMENT-ONLINE
Route::get('/admin/transaction/accounting-staff/payment-online', function (){
   return view('pages.transaction.accounting staff.payment-online');
});

//PAYMENT-ONLINE Auto reply
Route::get('/admin/transaction/accounting-staff/payment-online-auto-reply', function (){
   return view('pages.transaction.accounting staff.payment-online-auto-reply');
});

//PAYMENT-new
Route::get('/admin/transaction/accounting-staff/payment-new', function (){
   return view('pages.transaction.accounting staff.payment-new');
});

//////GENERATE PDF 
//samplelang Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ProductController@htmltopdfview'));
Route::get('/admin/pdf/quotation-proposal', 'trans_quotationProposalController@generatePDF');
Route::get('/admin/pdf/breakdown-payment', 'trans_breakdownOfPaymentController@generatePDF');
Route::get('/admin/pdf/transmittal-form', 'trans_TransmittalFormController@generatePDF');

//////////////WEB PAGE///////////////////

/////////////NOT SIGNED IN
//HOME
Route::get('/home', function (){
   return view('pages.webpage.home');
});

//QUOTATION
Route::get('/quotation', function (){
   return view('pages.webpage.quotation');
});

//CLAIMS
Route::get('/claims', function (){
   return view('pages.webpage.claims');
});

//CLAIMS
Route::get('/claim/requirements', function (){
   return view('pages.webpage.claim-requirements');
});

//TRANSMITTAL
Route::get('/transmittal/signin', function (){
   return view('pages.webpage.transmittal-signin');
});

//ENDORSEMENT
Route::get('/endorsement/signin', function (){
   return view('pages.webpage.endorsement-signin');
});

//MONITOR PAYMENT
Route::get('/monitor/payment/signin', function (){
   return view('pages.webpage.monitor-payment-signin');
});

//MONITOR transmittal
Route::get('/monitor/transmittal/signin', function (){
   return view('pages.webpage.monitor-transmittal-signin');
});

//MONITOR claims
Route::get('/monitor/claims/signin', function (){
   return view('pages.webpage.monitor-claims-signin');
});

//MONITOR complaint
Route::get('/monitor/complaint/signin', function (){
   return view('pages.webpage.monitor-complaint-signin');
});

//MONITOR endorsement
Route::get('/monitor/endorsement/signin', function (){
   return view('pages.webpage.monitor-endorsement-signin');
});

//MONITOR quotation
Route::get('/monitor/quotation/signin', function (){
   return view('pages.webpage.monitor-quotation-signin');
});

//COMPLAINT
Route::get('/complaint/signin', function (){
   return view('pages.webpage.complaint-signin');
});
//////////////////////NOT SIGNED IN


///////////////////////////SIGNED IN
//HOME
Route::get('/user/home', function (){
   return view('pages.webpage.sign-in.home');
});

//QUOTATION
Route::get('/user/quotation', function (){
   return view('pages.webpage.sign-in.quotation');
});

//CLAIMS
Route::get('/user/claims', function (){
   return view('pages.webpage.sign-in.claims');
});

//CLAIMS
Route::get('/user/claim/requirements', function (){
   return view('pages.webpage.sign-in.claim-requirements');
});

//TRANSMITTAL
Route::get('/user/transmittal/signin', function (){
   return view('pages.webpage.sign-in.transmittal-signin');
});

//ENDORSEMENT
Route::get('/user/endorsement/signin', function (){
   return view('pages.webpage.sign-in.endorsement-signin');
});

//MONITOR PAYMENT
Route::get('/user/monitor/payment/signin', function (){
   return view('pages.webpage.sign-in.monitor-payment-signin');
});

//MONITOR transmittal
Route::get('/user/monitor/transmittal/signin', function (){
   return view('pages.webpage.sign-in.monitor-transmittal-signin');
});

//MONITOR claims
Route::get('/user/monitor/claims/signin', function (){
   return view('pages.webpage.sign-in.monitor-claims-signin');
});

//MONITOR complaint
Route::get('/user/monitor/complaint/signin', function (){
   return view('pages.webpage.sign-in.monitor-complaint-signin');
});

//MONITOR endorsement
Route::get('/user/monitor/endorsement/signin', function (){
   return view('pages.webpage.sign-in.monitor-endorsement-signin');
});

//MONITOR quotation
Route::get('/user/monitor/quotation/signin', function (){
   return view('pages.webpage.sign-in.monitor-quotation-signin');
});

//COMPLAINT
Route::get('/user/complaint/signin', function (){
   return view('pages.webpage.sign-in.complaint-signin');
});

//PAYMENT
Route::get('/user/payment', function (){
   return view('pages.webpage.sign-in.payment');
});

//PAYMENT - new
Route::get('/user/payment/new', function (){
   return view('pages.webpage.sign-in.payment-new');
});
///////////////////////////////SIGNED IN

?>