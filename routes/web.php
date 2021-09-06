<?php

use App\Http\Controllers\SocialLogin\FacebookLoginController;
use App\Http\Controllers\SocialLogin\GithubLoginController;
use App\Http\Controllers\SocialLogin\GoogleLoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Github login
Route::get('/auth/github', [GithubLoginController::class, 'redirectToProvider']);
Route::get('/auth/github/callback', [GithubLoginController::class, 'handleProviderCallback']);

//Facebook login
Route::get('/auth/facebook', [FacebookLoginController::class, 'redirectToProvider']);
Route::get('/auth/facebook/callback', [FacebookLoginController::class, 'handleProviderCallback']);

//Facebook login
Route::get('/auth/google', [GoogleLoginController::class, 'redirectToProvider']);
Route::get('/auth/google/callback', [GoogleLoginController::class, 'handleProviderCallback']);

