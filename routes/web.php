<?php

use App\Http\Controllers\SocialLogin\FacebookLoginController;
use App\Http\Controllers\SocialLogin\GithubLoginController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



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

