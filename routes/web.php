<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\Admin\ProbeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CMMQuoteController as AdminCMMQuoteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartCategoryController;
use App\Http\Controllers\CmmQuoteController;

require __DIR__ . '/auth.php';

Route::view('/', 'index')->name('index');

Route::get('certified-cmms', [HomeController::class, 'usedCMMs'])->name('used.cmm');
Route::get('request-quote/{slug}', [HomeController::class, 'requestQuote'])->name('request.quote');
Route::post('cmm-quote-request', [HomeController::class, 'cmmQuoteRequest'])->name('cmmQuoteRequest');


// Cart functionality
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove.cart');
Route::post('/cart-update', [CartController::class, 'updateCart'])->name('cart.update');
Route::match(['get', 'post'], '/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('submit-inquiry', [CartController::class, 'submitInquiry'])->name('submit.inquiry');


// Route::get('/CMM/{category}/{subcategory?}/{childcategory?}', [HomeController::class, 'category'])->name('category');
// Route::get('/CMM-probes/{category}/{probes?}', [HomeController::class, 'probes'])->name('probes');
Route::get('/CMM-probes/{category}/{probes?}/{module?}', [HomeController::class, 'probes'])->name('probes');

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

    // Quote routes
    Route::get('quotes', [DashboardController::class, 'quotes'])->name('quotes');
    Route::get('quote/{id}', [DashboardController::class, 'quoteShow'])->name('quote.show');
    Route::delete('quote-destroy/{id}', [DashboardController::class, 'quoteDestroy'])->name('quote.destroy');

    // Probes routes
    Route::resource('probes', ProbeController::class);
    Route::match(['post', 'put'], '/image-upload', [ProbeController::class, 'imageUpload'])->name('image.upload');
    Route::put('probes/{probe}', [ProbeController::class, 'update']);

    // probe category
    Route::resource('part-category', PartCategoryController::class);

      // used cmm category
      Route::resource('used-cmm', AdminCMMQuoteController::class);

    // Quote routes
    Route::get('used-cmm-quotes', [CmmQuoteController::class, 'cmmquotes'])->name('cmm.quotes');
    Route::get('used-cmm-quotes/{id}', [CmmQuoteController::class, 'cmmquoteShow'])->name('cmm.quote.show');
    Route::delete('used-cmm-quotes/{id}', [CmmQuoteController::class, 'cmmquoteDestroy'])->name('cmm.quote.destroy');
});
