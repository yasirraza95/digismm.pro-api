<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});


Route::post('login', 'GeneralController@login');
Route::post('admin-login', 'GeneralController@adminLogin');
Route::get('user-info/{id}', 'GeneralController@userInfo');
Route::get('profile', 'GeneralController@profile');
Route::post('register', 'GeneralController@register');
Route::get('check-forgot/{token}', 'GeneralController@checkForgotToken');
Route::post('make-payment', 'GeneralController@makePayment');
Route::get('list-payments', 'GeneralController@listPayments');
Route::get('list-payment/{id}', 'GeneralController@listPaymentbyUser');
Route::put('payment-action/{id}', 'GeneralController@paymentAction');
Route::put('order-action/{id}', 'GeneralController@orderAction');
Route::post('contact', 'GeneralController@contactSubmit');

Route::get('list-categories', 'GeneralController@listCategories');
Route::post('add-category', 'GeneralController@addCategory');
Route::get('category/{id}', 'GeneralController@getCategoryById');
Route::put('category/{id}', 'GeneralController@updateCategory');
Route::delete('category/{id}', 'GeneralController@deleteCategory');

Route::get('list-services', 'GeneralController@listServices');
Route::get('service/{id}', 'GeneralController@getServiceById');
Route::post('service-info', 'GeneralController@getServiceInfoByName');
// Route::put('service/{id}', 'GeneralController@updateService');
Route::post('list-service-category', 'GeneralController@listServicebyCategory');
Route::post('add-service', 'GeneralController@addService');
Route::put('service/{id}', 'GeneralController@updateService');
Route::delete('service/{id}', 'GeneralController@deleteService');

// TODO payment check
Route::get('list-order/{id}', 'GeneralController@listOrderbyUser');
Route::get('list-orders', 'GeneralController@listAllOrders');
Route::post('order', 'GeneralController@newOrder');

Route::get('dashboard-counter', 'GeneralController@listDashboardCounter');

Route::post('subscription', 'GeneralController@addSubscription');


Route::get('check-username/{username}', 'GeneralController@checkUsernameExist');
Route::post('recipient-register', 'GeneralController@recipientRegister');
Route::get('check-email/{email}', 'GeneralController@checkEmailExist');
Route::get('check-email-verification/{token}', 'GeneralController@checkEmailVerification');
Route::get('validate-email-verification/{token}', 'GeneralController@validateEmailVerification');
Route::get('check-phone/{phone}', 'GeneralController@checkPhoneExist');
Route::get('check-phone-verification/{otp}', 'GeneralController@checkPhoneVerification');
Route::get('validate-phone-verification/{otp}', 'GeneralController@validatePhoneVerification');
Route::post('forgot', 'GeneralController@forgotPassword');
Route::get(
    'check-forgot-token/{token}',
    'GeneralController@checkForgotToken'
);
Route::get('list-years', 'GeneralController@listYears');
Route::get('list-states', 'GeneralController@listStates');
Route::get('list-cities', 'GeneralController@listCities');
Route::get('get-city-by-state/{name}', 'GeneralController@getCitiesByStateName');
Route::put('update/{id}', 'GeneralController@updateUser');
Route::post('update-admin-password/{id}', 'GeneralController@updateAdmin');
Route::post('update-admin-image/{id}', 'GeneralController@updateAdminImage');
Route::put(
    'update-password/{token}',
    'GeneralController@updatePassword'
);
Route::post('blood-request', 'GeneralController@bloodRequest');
Route::get('list-blood-request/{type}', 'GeneralController@listBloodRequest');
Route::get('list-donor', 'GeneralController@listBloodDonor');
Route::get('list-all-donor', 'GeneralController@listAllBloodDonor');
Route::get('get-donor/{id}', 'GeneralController@getBloodDonorById');
Route::get('marquee', 'GeneralController@getMarquee');
Route::post('suggest-area', 'GeneralController@areaSuggestion');
Route::get('user-views', 'GeneralController@userViews');


Route::put('admin-password', 'GeneralController@updateAdminPassword');
Route::get('admin-requests', 'GeneralController@listAdminBloodRequest');
Route::delete('admin-request/{id}', 'GeneralController@deleteBloodReqById');
Route::delete('admin-donor/{id}', 'GeneralController@deleteDonorById');
Route::get('donor-counter', 'GeneralController@donorCounter');
Route::get('request-counter', 'GeneralController@requestCounter');
Route::get('list-volunteers', 'GeneralController@listVolunteers');
Route::get('list-admin-volunteers', 'GeneralController@listAdminVolunteers');

// TODO deletion of blood donor, blood requests, listing of blood requests,  profile