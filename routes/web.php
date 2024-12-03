<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProbeController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

require __DIR__ . '/auth.php';

Route::view('/', 'index')->name('index');

// Route::get('CMM-Probes', [HomeController::class, 'probes'])->name('probes');
Route::post('send-email', [HomeController::class, 'sendEmail'])->name('send.email');

Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::post('/save-part-selection', [HomeController::class, 'savePartSelection']);

// Route::get('/CMM/{category}/{subcategory?}/{childcategory?}', [HomeController::class, 'category'])->name('category');
Route::get('/CMM-probes/{category}/{probes?}', [HomeController::class, 'probes'])->name('probes');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // Admin dashboard route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Parts routes
    Route::resource('parts', PartController::class);

    // Category routes
    Route::resource('category', CategoryController::class);

    // Probes routes
    Route::resource('probes', ProbeController::class);
    Route::match(['post', 'put'], '/image-upload', [ProbeController::class, 'imageUpload'])->name('image.upload');
    Route::put('probes/{probe}', [ProbeController::class, 'update']);
});
