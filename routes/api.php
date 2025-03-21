<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\LoginController;
use App\Http\Controllers\api\v1\ProfileController;
use App\Http\Controllers\api\v1\HomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [LoginController::class, 'register']);
    Route::post('forgot-password', [LoginController::class, 'forgotPassword']);
    Route::post('verify-referal-code', [LoginController::class, 'verifyReferalCode']);
    Route::post('otp', [LoginController::class, 'otp']);
    Route::post('forgot-otp', [LoginController::class, 'forgotOtp']);
    Route::post('resend-otp', [LoginController::class, 'resendOtp']);
    Route::get('all-countries', [ProfileController::class, 'get_all_countries']);
    Route::get('all-states-by-countries/{id}', [ProfileController::class, 'get_states_by_country']);
    Route::get('all-districts-by-states/{id}', [ProfileController::class, 'get_districts_by_state']);
    Route::get('gold-rate', [HomeController::class, 'gold_rate']);
    Route::get('all-schemes', [HomeController::class, 'all_schemes']);




    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::get('logout', [LoginController::class, 'logout']);
        Route::post('change-password', [LoginController::class, 'changePassword']);
        Route::get('profile', [ProfileController::class, 'profile']);
        Route::post('profile-update', [ProfileController::class, 'profileUpdate']);
        Route::get('user-subscriptions', [ProfileController::class, 'userSubscriptions']);
        Route::get('plan-duration/{scheme_id}', [ProfileController::class, 'plan_duration']);
        Route::post('deposit/{sub_id}', [ProfileController::class, 'deposit']);
        Route::get('current-plan-history/{scheme_id}', [ProfileController::class, 'current_plan_history']);
        Route::get('due-dates/{scheme_id}', [ProfileController::class, 'due_dates']);
        Route::get('wallet', [ProfileController::class, 'wallet']);
        Route::get('my-payments', [ProfileController::class, 'my_payments']);
        Route::get('scheme-history', [ProfileController::class, 'scheme_history']);
        Route::post('verify-signature', [ProfileController::class, 'verifySignature']);
        Route::get('payment-details/{dep_id?}', [ProfileController::class, 'paymentDetails']);
        Route::post('app-token', [ProfileController::class, 'token']);
        Route::get('send-notification', [ProfileController::class, 'sendNotification']);



    });
});
