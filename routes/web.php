<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();
Route::controller(HomeController::class)->group(function(){
    Route::get('/about','index');
});
Route::get('/profile',function(){
    return view('admin.profile');
});
Route::get('/dashboard',function(){
    return view('admin.index');
});
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
});