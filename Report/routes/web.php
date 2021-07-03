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

Route::get('main', function () {
    return view('layouts.main.main');
});

Route::get('/', 'dashboardController@index')->name('login');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'dashboardController@dashboard')->name('dashboard');


//.....................................................Company Info Management..................................................

Route::get('/companyinfo_create', 'companyinfoController@company_create')->name('companyinfo-create-page');
Route::post('/companyinfo_store', 'companyinfoController@company_store')->name('companyinfo-create-store');
Route::post('/companyinfo_update/{id}', 'companyinfoController@companyinfo_update')->name('companyinfo-edit-store');


//--------------------Client------------------------

Route::get('clientcreate', 'clientController@client_create')->name('client-create');

Route::get('clientlist', 'clientController@client_list')->name('client-list');

//.....................................................Client Info Management..................................................

Route::get('/client_list', 'clientController@client_list')->name('client-list-page');
Route::get('/client_create', 'clientController@client_create')->name('client-create-page');
Route::post('/client_store', 'clientController@client_store')->name('client-create-store');
Route::get('/client_edit/{id}', 'clientController@client_edit')->name('client-edit-page');
Route::post('/client_update/{id}', 'clientController@client_update')->name('client-edit-store');
Route::get('/client_delete/{id}', 'clientController@client_delete')->name('client-delete-store');

//.....................................................Proposal Management..................................................

Route::get('/proposal_list', 'proposalController@proposal_list')->name('proposal-list-page');
Route::get('/proposal_create', 'proposalController@proposal_create')->name('proposal-create-page');
Route::post('/proposal_store', 'proposalController@proposal_store')->name('proposal-create-store');
Route::get('/proposal_edit/{id}', 'proposalController@proposal_edit')->name('proposal-edit-page');
Route::post('/proposal_update/{id}', 'proposalController@proposal_update')->name('proposal-edit-store');
Route::get('/proposal_delete/{id}', 'proposalController@proposal_delete')->name('proposal-delete-store');
Route::get('/proposal_view/{id}', 'proposalController@proposal_view')->name('proposal-view-page');

//.....................................................Service Management..................................................

Route::get('/service_list', 'serviceController@service_list')->name('service-list-page');
Route::get('/service_create', 'serviceController@service_create')->name('service-create-page');
Route::post('/service_store', 'serviceController@service_store')->name('service-create-store');
Route::get('/service_edit/{id}', 'serviceController@service_edit')->name('service-edit-page');
Route::post('/service_update/{id}', 'serviceController@service_update')->name('service-edit-store');
Route::get('/service_delete/{id}', 'serviceController@service_delete')->name('service-delete-store');


//.....................................................Invoice Management..................................................

Route::get('/invoice_list', 'invoiceController@invoice_list')->name('invoice-list-page');
Route::get('/invoice_create', 'invoiceController@invoice_create')->name('invoice-create-page');
Route::post('/invoice_store', 'invoiceController@invoice_store')->name('invoice-create-store');
Route::get('/invoice_edit/{id}', 'invoiceController@invoice_edit')->name('invoice-edit-page');
Route::post('/invoice_update/{id}', 'invoiceController@invoice_update')->name('invoice-edit-store');
Route::get('/invoice_delete/{id}', 'invoiceController@invoice_delete')->name('invoice-delete-store');

//--------------------invoice------------------------
Route::get('invoice/{id}', 'invoiceController@invoice')->name('invoice_print');





//--------------------Inspection------------------------

Route::get('inspectionteamcreate', 'inspectionController@inspection_team_create')->name('inspectionteam-create');
Route::get('inspectionteamlist', 'inspectionController@inspection_team_list')->name('inspectionteam-list');
Route::get('inspectioncreate', 'inspectionController@inspection_create')->name('inspection-create');
Route::get('inspectionlist', 'inspectionController@inspection_list')->name('inspection-list');


//--------------------Agreements------------------------

Route::get('agreements_invoice', 'agreementsController@agreemts_invoice')->name('agreemts_invoice');
Route::get('/agreements_list', 'agreementsController@agreement_list')->name('agreements_list_page');
Route::get('/agreements_create', 'agreementsController@agreement_create')->name('agreements_create_page');
Route::post('/agreements_store', 'agreementsController@agreements_store')->name('agreements_store_page');
Route::post('/agreements_destroy/{id}', 'agreementsController@agreements_delete')->name('agreement-delete-func');
Route::get('/search_proposal', 'agreementsController@search_proposal')->name('find_agreement_proposal');
Route::get('/search_invoice', 'agreementsController@search_invoice')->name('find_agreement_invoice');

//--------------------Agreements------------------------

Route::get('review', 'reviewController@review')->name('review');

//--------------------Report Management------------------------

Route::get('/report/create', 'ReportController@create_report')->name('report_create_page');
Route::post('/report/store', 'ReportController@create_store')->name('report_store_func');
Route::get('/report/list', 'ReportController@report_list')->name('report_list_page');
Route::get('/report/find', 'ReportController@find_proposal')->name('find_report_proposal');
Route::get('/report/destroy/{id}', 'ReportController@report_delete')->name('report_delete_func');


