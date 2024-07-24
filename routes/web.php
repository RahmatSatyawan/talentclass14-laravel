<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

Route::get('/' , [HomeController :: class, 'index']);

// Route::get('/your-route/{slug}', [YourController::class, 'yourMethod']);
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');

// Route::get('/news/{id}', [HomeController::class, 'news'])->name('news');  
Route::resource('news', NewsController::class);
// GET /news -> NewsController@index (named news.index)
// GET /news/create -> NewsController@create (named news.create)
// POST /news -> NewsController@store (named news.store)
// GET /news/{news} -> NewsController@show (named news.show)
// GET /news/{news}/edit -> NewsController@edit (named news.edit)
// PUT/PATCH /news/{news} -> NewsController@update (named news.update)
// DELETE /news/{news} -> NewsController@destroy (named news.destroy)




//static content
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
