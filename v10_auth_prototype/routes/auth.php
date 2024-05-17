<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\RegistrationController;
use \App\Http\Controllers\Auth\LogoutController;

Route::name('user.')->group(function (){

    Route::get('registration', [RegistrationController::class, 'index'])->name('registration');
    Route::post('registration', [RegistrationController::class, 'save']);

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

});
