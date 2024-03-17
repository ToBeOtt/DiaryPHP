<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Diary\DiaryController;

// To my understanding, this is not the best way of grouping and organizing the routes, but I chose
// focus my attention on other areas since it still is quite few routes, so I think it is no 
// bigger troubles to overlook the routings.

// DIARIES
Route::get(
    '/',
    [DiaryController::class, 'index']
)->name('diary.index')
    ->middleware('auth');

Route::get(
    '/diary/add-diary',
    [DiaryController::class, 'GenerateDiaryMessage']
)->name('diary.messages.generatePost')
    ->middleware('auth');

Route::post(
    '/diary',
    [DiaryController::class, 'addDiaryMessage']
)->name('diary.messages.add')
    ->middleware('auth');

Route::get(
    '/diary/{diary}/edit-diary',
    [DiaryController::class, 'editDiaryMessage']
)->name('diary.messages.edit')
    ->middleware('auth');

Route::put(
    '/{id}',
    [DiaryController::class, 'updateDiaryMessage']
)->name('diary.messages.update')
    ->middleware('auth');

Route::delete(
    '/{id}',
    [DiaryController::class, 'deleteDiaryMessage']
)->name('diary-messages.delete')
    ->middleware('auth');


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
