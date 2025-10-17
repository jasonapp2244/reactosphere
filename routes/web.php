<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestUserController;
use App\Http\Controllers\SupportMailController;

// -------------------- Guest Routes --------------------
Route::get('/', [GuestUserController::class, 'index'])->name('guest.homePage');

Route::post('/support/send', [SupportMailController::class, 'send'])->name('support.email.send');
Route::get('/support/thanks-page', [SupportMailController::class, 'thanksPage'])->name('support.thanksPage');

Route::get('/games', [GuestUserController::class, 'gamePage'])->name('guest.gamePage');
Route::get('/tokens', [GuestUserController::class, 'tokenPage'])->name('guest.tokenPage');
Route::get('/react-calculator', [GuestUserController::class, 'reactCalculatorPage'])->name('guest.reactCalculatorPage');

// -------------------- Auth Routes --------------------
Route::get('/sign-up', [AuthController::class, 'showSignupForm'])->name('user.signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('user.signup.post');

Route::get('/sign-in', [AuthController::class, 'showSignInForm'])->name('user.signin');
Route::post('/login', [AuthController::class, 'logIn'])->name('user.login.post')->middleware('throttle:6,1');

Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');


Route::get('/resend-random-password', [AuthController::class, 'showResendForm'])->name('user.resend-password.form');
Route::post('/resend-random-password', [AuthController::class, 'resendRandomPassword'])->name('user.resend-password.post');
// -------------------- Protected Routes --------------------
Route::middleware(['auth.role'])->group(function () {
    // ✅ User Dashboard
    Route::get('/dashboard', [GuestUserController::class, 'userDashboard'])->name('user.Dashboard');

    // ✅ User actions
    Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('user.change-password');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('user.change-password.post');


    // ✅ Admin routes (still using same middleware, but no prefix)
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/signout', [AuthController::class, 'signout'])->name('admin.signout');
});

// -------------------- Social Login --------------------
Route::get('/auth/{provider}/redirect', [AuthController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback'])->name('social.callback');

// -------------------- Fallback Route --------------------
Route::fallback(function () {
    return response()->view('errors_404', [], 404);
});
