<?php

require __DIR__.'/web/pages.php';
require __DIR__.'/web/users.php';
require __DIR__.'/web/references.php';
require __DIR__.'/web/account.php';
require __DIR__.'/web/projects.php';
require __DIR__.'/web/payments.php';
require __DIR__.'/web/reports.php';
require __DIR__.'/web/invoices.php';
require __DIR__.'/web/calendar.php';

Route::get('/franchasee/document', ['as' => 'franchasee', 'uses' => 'FranchaseeController@index']);
Route::get('/franchasee/visitform', ['as' => 'visitform', 'uses' => 'FranchaseeController@visitindex']);
Route::post('/franch/postvisit', ['as' => 'postvisitform', 'uses' => 'FranchaseeController@postvisitform']);
Route::get('/franchasee/demoform', ['as' => 'demoform', 'uses' => 'FranchaseeController@demoindex']);
Route::post('/franch/postdemo', ['as' => 'postdemoform', 'uses' => 'FranchaseeController@postdemoform']);
Route::get('/franchasee/serviceagreement', ['as' => 'serviceagreement', 'uses' => 'FranchaseeController@serviceagreeindex']);
Route::post('/franch/postserviceagree', ['as' => 'postserviceagreement', 'uses' => 'FranchaseeController@postserviceagreement']);

Route::get('/franchisee/report/index', ['as' => 'reportindex', 'uses' => 'FranchaseeController@reportindex']);
Route::get('/franchisee/report/get', ['as' => 'franchiseereport', 'uses' => 'FranchaseeController@franchiseereport']);
        Route::post('/franch/report', ['as' => 'franchreport', 'uses' => 'FranchaseeController@franchiseereportdetails']);
        Route::get('/franchasee/registerform', ['as' => 'franchregisterform', 'uses' => 'FranchaseeController@franchregisterform']);
        Route::post('/franch/postfranchregister', ['as' => 'postfranchregister', 'uses' => 'FranchaseeController@postfranchregister']);
        Route::get('/franch/download/resume/{id}', ['as' => 'franch.download.resume', 'uses' => 'FranchaseeController@downloadresume']);
        Route::get('/franch/download/photo/{id}', ['as' => 'franch.download.photo', 'uses' => 'FranchaseeController@downloadphoto']);
         Route::get('/franch/download/kyc/{id}', ['as' => 'franch.download.kyc', 'uses' => 'FranchaseeController@downloadkycdocument']);
          Route::delete('/franch/reg/delete//{id}', ['as' => 'franch.register.delete', 'uses' => 'FranchaseeController@franchregisterdelete']);
          Route::delete('/franch/visit/delete//{id}', ['as' => 'franch.visit.delete', 'uses' => 'FranchaseeController@franchvisitdelete']);
          Route::delete('/franch/demo/delete//{id}', ['as' => 'franch.demo.delete', 'uses' => 'FranchaseeController@franchdemodelete']);
          Route::delete('/franch/service/delete//{id}', ['as' => 'franch.service.delete', 'uses' => 'FranchaseeController@franchservicedelete']);
          Route::get('/franch/download/demologo/{id}', ['as' => 'franch.download.demologo', 'uses' => 'FranchaseeController@downloaddemologo']);
        Route::get('/franch/download/demoform/{id}', ['as' => 'franch.download.demoform', 'uses' => 'FranchaseeController@downloaddemoform']);
        Route::get('/franch/download/agreementlogo/{id}', ['as' => 'franch.download.agreementlogo', 'uses' => 'FranchaseeController@downloadagreementlogo']);
        Route::get('/franch/download/serv_agreement/{id}', ['as' => 'franch.download.serv_agreement', 'uses' => 'FranchaseeController@downloadserv_agreement']);
        Route::get('/franchisee/franchiseelist/get', ['as' => 'franchiseelist', 'uses' => 'FranchaseeController@franchiseelist']);
        Route::post('/franch/franchiseelistdetails', ['as' => 'franchiseelistdetails', 'uses' => 'FranchaseeController@franchiseelistdetails']);
        Route::get('/franchisee/visitlists/get', ['as' => 'visitlists', 'uses' => 'FranchaseeController@visitlists']);
        Route::post('/franch/visitlistsdetails', ['as' => 'visitlistsdetails', 'uses' => 'FranchaseeController@visitlistsdetails']);
         Route::get('/franchisee/demolists1', ['as' => 'demolists', 'uses' => 'FranchaseeController@demolists']);
         Route::post('/franch/demolistsdetails', ['as' => 'demolistsdetails', 'uses' => 'FranchaseeController@demolistsdetails']);
         Route::get('/franchisee/agreementlist', ['as' => 'agreementlist', 'uses' => 'FranchaseeController@agreementlist']);
         Route::post('/franch/agreementlistdetails', ['as' => 'agreementlistdetails', 'uses' => 'FranchaseeController@agreementlistdetails']);

Route::group(['middleware' => ['role:admin']], function () {
    /*
     * Subscriptions Routes
     */
    Route::resource('subscriptions', 'SubscriptionsController');

    /*
     * Backup Restore Database Routes
     */
    Route::post('backups/upload', ['as' => 'backups.upload', 'uses' => 'BackupsController@upload']);
    Route::post('backups/{fileName}/restore', ['as' => 'backups.restore', 'uses' => 'BackupsController@restore']);
    Route::get('backups/{fileName}/dl', ['as' => 'backups.download', 'uses' => 'BackupsController@download']);
    Route::resource('backups', 'BackupsController', ['except' => ['create', 'show', 'edit']]);

    /*
     * Customers Routes
     */
    Route::get('customers/{customer}/projects', ['as' => 'customers.projects', 'uses' => 'Customers\ProjectsController@index']);
    Route::get('customers/{customer}/payments', ['as' => 'customers.payments', 'uses' => 'Customers\PaymentsController@index']);
    Route::get('customers/{customer}/subscriptions', ['as' => 'customers.subscriptions', 'uses' => 'Customers\SubscriptionsController@index']);
    Route::get('customers/{customer}/invoices', ['as' => 'customers.invoices', 'uses' => 'Customers\InvoicesController@index']);
    Route::resource('customers', 'Partners\CustomersController');

    /*
     * Vendors Routes
     */
    Route::apiResource('vendors', 'Partners\VendorsController');
});
