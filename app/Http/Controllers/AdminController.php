<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard',[
            'activates' => Photo::latest()->where('status', 'activate')->get(),
            'deactivates' => Photo::latest()->where('status', 'deactivate')->get()
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
}
