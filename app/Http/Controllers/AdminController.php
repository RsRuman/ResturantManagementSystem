<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard',[
            'photos' => Photo::latest()->get()
        ]);
    }

    public function sliderImageStore(Request $request){

        $request->validate([
            'thumbnail' => 'required'
        ]);

        Photo::create([
            'thumbnail' => $request->file('thumbnail')->store('sliders'),
            'type' => 'slider',
            'status' => 'active'
        ]);

        return redirect(route('adminDashboard'));
    }
}
