<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChangePasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {

    Route::get('login',[AuthenticatedSessionController::class,'login'])->name('login');

    Route::post('login',[AuthenticatedSessionController::class,'store']);

    Route::get('register_admin',[AuthenticatedSessionController::class,'register_user']);
    Route::get('register_school',[AuthenticatedSessionController::class,'register_school']);

    
    // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    //     ->name('password.request');

});


Route::middleware(['auth','admin'])->group(function(){

    Route::prefix('admin')->group(function () {
    
        Route::get('/',[DashboardController::class,'admin'])->name('admin_home');
        
        Route::resource('/schools',SchoolController::class);

        Route::get('/schools/{school}/students',[SchoolController::class,'students'])->name('schools.students');

    });

});


Route::middleware(['auth','school'])->group(function(){
    
    Route::get('/',[DashboardController::class,'school'])->name('school_home');

    Route::resource('/students',StudentController::class);

    Route::get('/students/certificate/{student}',[StudentController::class,'certificate'])->name('students.certificate');

    Route::get('/search/students',[StudentController::class,'search'])->name('students.search');
});

Route::middleware('auth')->group(function(){

    Route::get('/change-password',[ChangePasswordController::class,'changePassword'])
        ->name('password.change');

    Route::post('/change-password',[ChangePasswordController::class,'updatePassword'])
        ->name('password.update');

    Route::get('/profile',[ProfileController::class,'show'])->name('profile.show');

    Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');
});