<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\PartsController;

require __DIR__ . '/auth.php';

Route::view('/', 'index')->name('index');

Route::get('CMM-Probes', [HomeController::class, 'probes'])->name('probes');
Route::post('send-email', [HomeController::class, 'sendEmail'])->name('send.email');

Route::get('/CMM/{category}/{subcategory?}/{childcategory?}', [HomeController::class, 'category'])->name('category');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Admin dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Category routes
    Route::resource('parts', PartsController::class);
});