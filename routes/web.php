<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

Route::get('/' , [HomeController :: class, 'index']);

// Route::get('/your-route/{slug}', [YourController::class, 'yourMethod']);
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');


Route::get('/contact', [HomeController::class,'showContact'])->name('policy');
Route::get('/policy', [HomeController::class,'showPolicy'])->name('policy');
Route::get('/terms', [HomeController::class, 'showTerms'])->name('terms');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
