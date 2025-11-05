<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\AdminController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function() {
    //admin dashboard
    Route::get('/dashboard', function () {
    return view('admin.pages.index');
    })->middleware(['verified'])->name('dashboard');

    //admin logout
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    //admin edit profile 
    Route::get('admin-edit-profile', [AdminController::class, 'AdminEditProfile'])->name('admin.edit.profile');


});















require __DIR__.'/auth.php';
























// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


