<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::view('index','index');
Route::view('categories','categories');
Route::view('subcategories','subcategories');
Route::view('service-list','service-list');
Route::view('total-report','total-report');
Route::view('subscriptions','subscriptions');
Route::view('settings','settings');
Route::view('login','login');
Route::view('register','register');
Route::view('forgot-password','forgot-password');
Route::view('error-404','error-404');
Route::view('blank-page','blank-page');
Route::view('components','components');
Route::view('form-basic-inputs','form-basic-inputs');
Route::view('form-vertical','form-vertical');
Route::view('form-horizontal','form-horizontal');
Route::view('tables-basic','tables-basic');
Route::view('add-category','add-category');
Route::view('edit-category','edit-category');
// Route::view('admin-notification','admin-notification');
Route::view('service-details','service-details');
Route::view('pending-report','pending-report');
Route::view('inprogress-report','inprogress-report');
Route::view('complete-report','complete-report');
Route::view('reject-report','reject-report');
Route::view('cancel-report','cancel-report');
Route::view('edit-subscription','edit-subscription');
// Route::view('add-subscription','add-subscription');
// Route::view('sms-settings','sms-settings');
// Route::view('stripe_payment_gateway','stripe_payment_gateway');
Route::view('emailsettings','emailsettings');
Route::view('settings','settings');
Route::view('settings','settings');
Route::view('settings','settings');
Route::view('settings','settings');