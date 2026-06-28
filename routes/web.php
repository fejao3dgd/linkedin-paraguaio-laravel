<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/Home', function () {
    return view('Home');
})->name('Home');

Route::get('/criarconta', function () {
    return view('auth.criar-conta');
})->name('criarconta');

Route::get('logar', function () {
    return view('auth.login');
})->name('logar');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/logar', [LoginController::class, 'login'])->name('login.post');