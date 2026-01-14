<?php

use Illuminate\Support\Facades\Route;

// Frontend Controllers
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacebookController;



/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

/* Cart */
Route::get('/cart', [CartController::class, 'cart'])
    ->middleware('auth')
    ->name('cart');

/* Products */
Route::get('/products', function () {
    return view('frontend.products');
})->name('products');

Route::get('/product-search', [ProductController::class, 'search'])
    ->name('product.search');

/*
|--------------------------------------------------------------------------
| User Dashboard & Profile (Breeze)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Social Login Routes
|--------------------------------------------------------------------------
*/

// Google
Route::get('/google/redirect', [AuthController::class, 'redirectToGoogle'])
    ->name('google.redirect');
Route::get('/login/callback', [AuthController::class, 'handleGoogleCallback'])
    ->name('google.callback');

// Facebook
Route::get('/auth/facebook', [FacebookController::class, 'redirectToFacebook'])
    ->name('auth.facebook');
Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Breeze Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
