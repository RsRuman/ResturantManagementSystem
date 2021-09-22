<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Photo;
use App\Models\Reservation;
use App\Models\User;
use App\Notifications\ActiveReservationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard',[
            'activates' => Photo::latest()->where('status', 'activate')->get(),
            'deactivates' => Photo::latest()->where('status', 'deactivate')->get(),
        ]);
    }

    public function sliderImageStore(Request $request){

        $request->validate([
            'thumbnail' => 'required'
        ]);

        Photo::create([
            'thumbnail' => $request->file('thumbnail')->store('sliders'),
            'type' => 'slider',
            'status' => 'activate'
        ]);

        return redirect(route('adminDashboard'));
    }

    //    Slider Image Deactivate Function
    public function sliderImageDeactivate(Photo $photo){

            Photo::where('id', $photo->id)->update(['status' => 'deactivate']);

            return redirect(route('adminDashboard'));
    }

    //    Slider Image activate Function
    public function sliderImageActivate(Photo $photo){

        Photo::where('id', $photo->id)->update(['status' => 'activate']);

        return redirect(route('adminDashboard'));
    }

    //    Live Dinner Restaurant Short Story
    public function shortStory(Request $request){

        $request->validate([
            'shortStory' => 'required|max:500'
        ]);

        Storage::disk('public')->put('shortStory.txt',  $request->shortStory);

        return redirect(route('adminDashboard'));
    }

    //    Live Dinner Restaurant Short Quote
    public function shortQuote(Request $request){

        $request->validate([
            'shortQuote' => 'required|max:500'
        ]);

        Storage::disk('public')->put('shortQuote.txt',  $request->shortQuote);

        return redirect(route('adminDashboard'));
    }

    public function galleryImage(){

        return view('admin.gallery',[
            'galleryImages' => GalleryImage::latest()->get()
        ]);
    }

    public function storeGalleryImage(Request $request){

        $request->validate([
           'thumbnail' => 'required'
        ]);

        GalleryImage::create([
           'thumbnail' => $request->file('thumbnail')->store('galleryImages')
        ]);

        return redirect(route('galleryImages'));
    }

    public function showReservation(){
        return view('admin.reservation', [
            'activateReservations' => Reservation::all()->where('status', 'activate'),
            'deactivateReservations' => Reservation::all()->where('status', 'deactivate')
        ]);
    }

    public function activateReservation($userId, $id)
    {

        $reservation = Reservation::find($id);
        $reservation->status = "activate";
        $reservation->save();

        $admin = User::where('uid', '4353029751472222')->first();
        $admin->notify(new ActiveReservationNotification($reservation));

        $user = User::find($userId);
        $user->notify(new ActiveReservationNotification($reservation));

        return redirect(route('customersReservation'));
    }

    public function showStuff(){
        return view('admin.stuff');
    }

}
