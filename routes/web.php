<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SocialLogin\FacebookLoginController;
use App\Http\Controllers\SocialLogin\GithubLoginController;
use App\Http\Controllers\SocialLogin\GoogleLoginController;
use App\Http\Controllers\StuffController;
use App\Models\CustomerReview;
use App\Models\foodMenu;
use App\Models\GalleryImage;
use App\Models\Photo;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {

    return view('welcome',[
        'photos' => Photo::latest()->where('status', 'activate')->get(),
        'shortStory' => Storage::get('shortStory.txt'),
        'shortQuote' => Storage::get('shortQuote.txt'),
        'foodItems' => foodMenu::latest()->get(),
        'drinks' => foodMenu::latest()->where('category', 'drinks')->get(),
        'lunches' => foodMenu::latest()->where('category', 'lunch')->get(),
        'dinners' => foodMenu::latest()->where('category', 'dinner')->get(),
        'galleryImages' => GalleryImage::latest()->get()
    ]);
});

Route::get('/dashboard', function () {

    $userId = auth()->id();

    return view('dashboard',[
        'currentReservations' => Reservation::latest()->where('user_id', $userId)->where('status', 'activate')->get(),
        'previousReservations' =>Reservation::latest()->where('user_id', $userId)->where('status', 'deactivate')->get(),
        'hasNoReviewYet' => CustomerReview::where('user_id', $userId)->first()
    ]);

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

//Reservation Route
Route::post('/reservation', [ReservationController::class, 'storeReservation']);

//Stuff Route
Route::get('/stuff', [StuffController::class, 'index'])->name('stuff');

//Gallery Route
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

//Contact Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Admin Dashboard Route
Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('adminDashboard');

//Admin Slider Image Store Route
Route::post('/admin/slider-image-store', [AdminController::class, 'sliderImageStore']);

//Admin Slider Image Deactivate Route
Route::get('/admin/slider-image-deactivate/{photo}', [AdminController::class, 'sliderImageDeactivate']);

//Admin Slider Image Activate Route
Route::get('/admin/slider-image-activate/{photo}', [AdminController::class, 'sliderImageActivate']);

//Admin Slider Image Activate Route
Route::post('/admin/live-dinner-restaurant-short-story', [AdminController::class, 'shortStory']);

//Admin Slider Image Activate Route
Route::post('/admin/live-dinner-restaurant-quote', [AdminController::class, 'shortQuote']);
//Admin Food Menus Dashboard Route
Route::get('/admin-food-menus', [FoodMenuController::class, 'index'])->name('foodMenus');

//Admin Upload food Item Route
Route::post('/admin/store-food', [FoodMenuController::class, 'storeFood']);

//Admin Gallery Images Route
Route::get('/admin-gallery-images', [AdminController::class, 'galleryImage'])->name('galleryImages');

//Admin Upload Gallery Images Route
Route::post('/admin/store-gallery-images', [AdminController::class, 'storeGalleryImage']);

//User reviews
Route::post('/user-review', function (Request $request){
    $userId = auth()->id();
    $user = CustomerReview::where('user_id', $userId)->first();

    $request->validate([
        'review' => 'required|min:5|max:100',
        'starRating' => 'required'
    ]);

    if(!$user){
        CustomerReview::create([
            'user_id' => $userId,
            'rating' => $request->starRating,
            'review' => $request->review
        ]);
    }

    return redirect(route('dashboard'));
});
