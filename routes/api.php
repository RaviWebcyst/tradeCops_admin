<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//user api
Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);
Route::post('/register', [App\Http\Controllers\UserController::class, 'register']);
Route::post('/sendMail', [App\Http\Controllers\UserController::class, 'sendMail']);
Route::post('/email_verification', [App\Http\Controllers\UserController::class, 'email_verification']);


//admin api

Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'loginUser']);
Route::middleware('auth:sanctum')->group(function(){
    
    //user api
    Route::get('/userDetails', [App\Http\Controllers\UserController::class, 'userDetails']);
    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);
    Route::post('/kyc_store', [App\Http\Controllers\UserController::class, 'kyc_store']);
    Route::post('/kyc_details', [App\Http\Controllers\UserController::class, 'kyc_details']);

    //admin api
    Route::prefix('admin')->group(function(){
    Route::get('/userDetails', [App\Http\Controllers\AdminController::class, 'userDetails']);

    Route::get('/pending_kyc', [App\Http\Controllers\AdminController::class, 'pending_kyc']);
    Route::get('/kyc_details/{id}', [App\Http\Controllers\AdminController::class, 'kyc_details']);
    Route::post('/update_kyc/{id}', [App\Http\Controllers\AdminController::class, 'update_kyc']);


    
    
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'get_users']);

    Route::get('/level_incomes', [App\Http\Controllers\AdminController::class, 'level_incomes']);
    Route::post('/store_income', [App\Http\Controllers\AdminController::class, 'store_income']);
    Route::post('/update_income/{id}', [App\Http\Controllers\AdminController::class, 'update_income']);
    Route::post('/delete_income/{id}', [App\Http\Controllers\AdminController::class, 'delete_income']);
    
    Route::get('/roi', [App\Http\Controllers\AdminController::class, 'roi']);
    Route::post('/update_roi/{id}', [App\Http\Controllers\AdminController::class, 'update_roi']);

    Route::get('/salary', [App\Http\Controllers\AdminController::class, 'salary']);
    Route::post('/update_salary/{id}', [App\Http\Controllers\AdminController::class, 'update_salary']);

    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
    });

});


