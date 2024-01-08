<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\ChangePasswordController;

use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;





Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('pages.index');
    })->name('home');
    
    Route::get('/blog', function () {
        return view('pages.blog');
    })->name('blog');
    
    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');
    Route::post('contact', [ContactController::class, 'contact'])
                ->name('contact');

    
    Route::get('/faq', function () {
        return view('pages.faq');
    })->name('faq');
    
    Route::get('/term', function () {
        return view('pages.term');
    })->name('term');


    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::get('registerVerify', function () {
                    return view('auth.registerPhoneVerify');
                });

    Route::post('registerVerify', [RegisteredUserController::class, 'verifyCode'])
                ->name('verifyCode');

    Route::get('personalInfo', function () {
                    return view('auth.personalInfo');
                })->name('personalInfo');

    Route::post('personalInfo', [RegisteredUserController::class, 'personalInfo'])
                ->name('personalInfo');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::post('loginPhone', [AuthenticatedSessionController::class, 'phoneLogin'])->name('loginPhone');

    Route::get('loginPhoneVerify', function () {
        return view('auth.loginPhoneVerify');
    })->name('loginPhoneVerify');
    Route::post('loginPhoneVerify', [AuthenticatedSessionController::class, 'loginVerifyCode'])->name('loginPhoneVerify');



    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');
                
    Route::get('check-Email', function () {
                    return view('auth.checkemail');
                })->name('check.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');


});




Route::middleware('auth')->group(function () {

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::put('/user/password', [ChangePasswordController::class, 'updatePassword'])->name('user.password.update');

    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

});
