<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

// Homepage route
Route::get('/', function () {
    return view('welcome');
});

// Show registration form
Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.show');

// Handle form submission and show success page
Route::post('/register', [RegistrationController::class, 'handleForm'])->name('register.submit');
