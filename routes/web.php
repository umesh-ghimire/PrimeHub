<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

//  cart
Route::get('/cart', [CartController::class, 'cart'])
    ->middleware('auth')->name('cart');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Login With Google Routes
Route::get('/google/redirect', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/login/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/product-search', [ProductController::class, 'search'])->name('product.search');

require __DIR__.'/auth.php';
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);



// Custom "Forgot Password" route: Logs out + redirects to standard forgot-password page
Route::get('/forgot-password-logout-redirect', function () {
    Auth::logout();
    
    // Invalidate session and regenerate CSRF token for security
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    
    return redirect()->route('password.request'); // Standard /forgot-password page
})->middleware('auth') // Only accessible to logged-in users
  ->name('password.forgot.logout.redirect');