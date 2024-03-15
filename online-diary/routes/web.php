<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;

// Index
Route::get('/', function () {
    return view('index');
});

// Diary-index
Route::get('/diary', function () {
    return view('diary.diary');
});

// Authentication
Route::get('/login', function () {
    return view('auth.login-page');
})->name('auth.login-page');

Route::post(
    '/login',
    [AuthenticationController::class, 'login']
)->name('login');

Route::post(
    '/',
    [AuthenticationController::class, 'logout']
)->name('logout');
