<?php

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
Route::get('/auth/redirect', [GithubLoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [GithubLoginController::class, 'handleProviderCallback']);

