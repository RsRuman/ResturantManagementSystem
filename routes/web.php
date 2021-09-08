<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SocialLogin\FacebookLoginController;
use App\Http\Controllers\SocialLogin\GithubLoginController;
use App\Http\Controllers\SocialLogin\GoogleLoginController;
use App\Http\Controllers\StuffController;
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

//Menu Route
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

//About Route
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Reservation Route
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

//Stuff Route
Route::get('/stuff', [StuffController::class, 'index'])->name('stuff');

//Gallery Route
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

//Contact Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
