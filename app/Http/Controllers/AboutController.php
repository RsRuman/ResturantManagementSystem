<?php

namespace App\Http\Controllers;

use App\Models\foodMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(){
        return view('about',[
            'shortStory' => Storage::get('shortStory.txt'),
            'foodItems' => foodMenu::latest()->get(),
            'drinks' => foodMenu::latest()->where('category', 'drinks')->get(),
            'lunches' => foodMenu::latest()->where('category', 'lunch')->get(),
            'dinners' => foodMenu::latest()->where('category', 'dinner')->get(),
        ]);
    }
}
