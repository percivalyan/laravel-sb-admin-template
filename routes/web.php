<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Dashboard
Route::get('/', function () {
    return view('welcome');
});
// Dashboard

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Auth
