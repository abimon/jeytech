<?php

use App\Http\Controllers\articlesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/portfolio', 'portfolio');
    Route::get('/team', 'team');
    Route::get('/insights', 'insights');
    Route::get('/insight/{slug}', 'insight');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::get('/dashboard',[HomeController::class,'dashboard']);
    Route::resources([
        'article' => articlesController::class
    ]);
});
