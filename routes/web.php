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
return redirect("admin/login");
    // return view('welcome');
});

Route::get("verifyEmail",[App\Http\Controllers\UserController::class, 'verifyEmail']);


Route::prefix("admin")->group(function(){
    Route::get("login",function(){
        return view('layouts.admin_app');
    })->name('admin.login');


    Route::middleware(['auth:sanctum','auth'])->group(function(){
        Route::get("home",function(){
            return view('layouts.admin_app');
        })->name('admin.home');

        Route::get("pending_kyc",function(){
            return view('layouts.admin_app');
        })->name('admin.pending_kyc');

        Route::get("/kyc_details/{id}",function(){
            return view('layouts.admin_app');
        })->name('admin.kyc_details');

        Route::get("pending_deposits",function(){
            return view('layouts.admin_app');
        })->name('admin.pending_deposits');

        Route::get("pending_withdraw",function(){
            return view('layouts.admin_app');
        })->name('admin.pending_withdraw');

        Route::get("pending_referral",function(){
            return view('layouts.admin_app');
        })->name('admin.pending_referral');

        Route::get("pending_registration",function(){
            return view('layouts.admin_app');
        })->name('admin.pending_registration');

        Route::get("users",function(){
            return view('layouts.admin_app');
        })->name('admin.users');

        Route::get("deposits",function(){
            return view('layouts.admin_app');
        })->name('admin.deposits');

        Route::get("salary",function(){
            return view('layouts.admin_app');
        })->name('admin.salary');

        Route::get("level_chart",function(){
            return view('layouts.admin_app');
        })->name('admin.level_chart');
        
        Route::get("add_level",function(){
            return view('layouts.admin_app');
        })->name('admin.add_level');

        Route::get("edit_level/{id}",function(){
            return view('layouts.admin_app');
        })->name('admin.edit_level');

        Route::get("roi",function(){
            return view('layouts.admin_app');
        })->name('admin.roi');

        Route::get("edit_roi/{id}",function(){
            return view('layouts.admin_app');
        })->name('admin.edit_roi');

        Route::get("salary_setting",function(){
            return view('layouts.admin_app');
        })->name('admin.salary_setting');

        Route::get("edit_salary/{id}",function(){
            return view('layouts.admin_app');
        })->name('admin.edit_salary');

        Route::get("referrals",function(){
            return view('layouts.admin_app');
        })->name('admin.referrals');

    });
});

//admin routes
// Route::get("/login",function(){
//    return redirect("/admin/login");
// });

// Route::get("/admin/login",[App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('admin.login');

// Auth::routes();


// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->prefix('admin')->group(function(){
//     Route::get('home', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin.home');
    
//     Route::get('pending_kyc', [App\Http\Controllers\AdminController::class, 'pending_kyc'])->name('admin.pending_kyc');

//     Route::get('pending_deposits', [App\Http\Controllers\AdminController::class, 'pending_deposits'])->name('admin.pending_deposits');

//     Route::get('pending_withdraw', [App\Http\Controllers\AdminController::class, 'pending_withdraw'])->name('admin.pending_withdraw');

//     Route::get('pending_referral', [App\Http\Controllers\AdminController::class, 'pending_referral'])->name('admin.pending_referral');

//     Route::get('pending_registration', [App\Http\Controllers\AdminController::class, 'pending_registration'])->name('admin.pending_registration');

//     Route::get('users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');

//     Route::get('deposits', [App\Http\Controllers\AdminController::class, 'deposits'])->name('admin.deposits');

//     Route::get('salary', [App\Http\Controllers\AdminController::class, 'salary'])->name('admin.salary');

//     Route::get('referrals', [App\Http\Controllers\AdminController::class, 'referrals'])->name('admin.referrals');

// });
