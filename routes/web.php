<?php

use App\Http\Controllers\anggotaController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware'=>['auth','role:admin']],function(){

    Route::resource('books', bookcontroller::class);
    Route::resource('users', userscontroller::class);
    Route::get('books.informasi', [bookController::class, 'informasi'])->name('books.informasi');

    });

Route::group(['middleware'=>['auth','role:anggota']],function(){
    Route::resource('anggota', anggotaController::class);
});



require __DIR__.'/auth.php';
