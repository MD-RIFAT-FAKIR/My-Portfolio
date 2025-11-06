<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HeroConroller;
use App\Http\Controllers\frontend\FrontendController;




//================================  Frontend all routes ======================================//
//frontend home page
Route::get('/', [FrontendController::class, 'homepage'])->name('home');

//================================ End Frontend all routes ===================================//








//================================ Backend all routes ===================================//

Route::middleware('auth')->group(function() {
    //admin dashboard
    Route::get('/dashboard', function () {
    return view('admin.pages.index');
    })->middleware(['verified'])->name('dashboard');

    //admin logout
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    //admin edit profile 
    Route::get('/admin-edit-profile', [AdminController::class, 'AdminEditProfile'])->name('admin.edit.profile');

    //admin update profile 
    Route::post('/admin-update-profile', [AdminController::class, 'AdminUpdateProfile'])->name('admin.update.profile');

    //admin change password 
    Route::get('/admin-change-password', [AdminController::class, 'AdminChangeProfile'])->name('admin.change.password');

    //admin update password 
    Route::post('/admin-update-password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');



    //----------------------Hero Section all route-----------------------//
    Route::get('/hero-section', [HeroConroller::class, 'HeroSection'])->name('hero.section');



    //----------------------End Hero Section all route-------------------//






});



//================================ End Backend all routes ===================================//











require __DIR__.'/auth.php';
























// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


