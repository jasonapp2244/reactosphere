<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestUserController;

// -------------------- Guest Routes --------------------
Route::get('/', [GuestUserController::class, 'index'])->name('guest.homePage');
Route::get('/game', [GuestUserController::class, 'gamePage'])->name('guest.gamePage');

// -------------------- Auth Routes --------------------
Route::get('/sign-up', [AuthController::class, 'showSignupForm'])->name('user.signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('user.signup.post');

Route::get('/sign-in', [AuthController::class, 'showSignInForm'])->name('user.signin');
Route::post('/login', [AuthController::class, 'logIn'])->name('user.login.post')->middleware('throttle:6,1');

Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');



// Route::get('/dashboard', [GuestUserController::class, 'userDashboard'])->name('user.Dashboard');
// Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('user.change-password');
// Route::post('/change-password', [AuthController::class, 'changePassword'])->name('user.change-password.post');

// Route::get('/resend-random-password', [AuthController::class, 'showResendForm'])->name('user.resend-password.form');
// Route::post('/resend-random-password', [AuthController::class, 'resendRandomPassword'])->name('user.resend-password.post');

// -------------------- User Routes --------------------
Route::middleware(['auth.role'])->group(function () {
    Route::get('/dashboard', [GuestUserController::class, 'userDashboard'])->name('user.Dashboard');
    Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('user.change-password');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('user.change-password.post');

    Route::get('/resend-random-password', [AuthController::class, 'showResendForm'])->name('user.resend-password.form');
    Route::post('/resend-random-password', [AuthController::class, 'resendRandomPassword'])->name('user.resend-password.post');
});

// -------------------- Admin Routes --------------------
Route::middleware(['auth.role'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/signout', [AuthController::class, 'signout'])->name('admin.signout');
    });
});

// -------------------- Social Login --------------------
Route::get('/auth/{provider}/redirect', [AuthController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback'])->name('social.callback');
