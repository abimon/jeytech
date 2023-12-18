<?php

use App\Http\Controllers\articlesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UpdatesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/projects', 'portfolio');
    Route::get('/team', 'team');
    Route::get('/insights', 'insights');
    Route::get('/insight/{slug}', 'insight');
    Route::get('/info', 'ups');
    Route::get('/info/{id}', 'up');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('admin.profile');
    });
    Route::get('/dashboard', [HomeController::class, 'dashboard']);
    Route::resources([
        'article' => articlesController::class,
        'users' => UserController::class,
        'updates' => UpdatesController::class,
        'portfolio' => PortfolioController::class,
        'testimonials' => TestimonialController::class,
        'partners'=>PartnersController::class
    ]);
    Route::controller(UserController::class)->prefix('/user')->group(function () {
        Route::post('/updateProf/{id}', 'updateProfile');
        Route::post('/updatePass/{id}', 'updatePass');
    });
});
Route::resources([
    'subscriber' => SubscribersController::class,
    'comments'=>CommentsController::class
]);
Route::get('MakinduCM', [articlesController::class, 'groups']);
