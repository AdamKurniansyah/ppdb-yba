<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\PaymentConfirmationController;

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'post_register']);
Route::get('/email/verify/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/email/verify/resend-verification', [VerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot_password-act');
Route::get('/validation-forgot-password/{token}', [LoginController::class, 'validation_forgot_password'])->name('validation-forgot-password');
Route::post('/validation-forgot-password-act', [LoginController::class, 'validation_forgot_password_act'])->name('validation-forgot-password-act');

Route::get('/registration-flow', function () {
    return view('registration-flow');
});

Route::get('/registration-form', [OrderController::class, 'index']);
Route::post('/checkout', [OrderController::class, 'checkout']);
Route::get('/invoice/{id}', [OrderController::class, 'invoice']);

Route::get('/payment-confirmation', [PaymentConfirmationController::class, 'index']);
Route::post('/payment-confirmation/post', [PaymentConfirmationController::class, 'store']);