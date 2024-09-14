<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', [ContactController::class, 'store'])->name('contact.store');
Route::get('/users', [ContactController::class, 'index'])->name('users.index');
Route::get('/', [ContactController::class, 'index'])->name('home'); // Ini akan mengarah ke halaman welcome
