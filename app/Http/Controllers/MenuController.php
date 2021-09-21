<?php

namespace App\Http\Controllers;

use App\Models\CustomerReview;
use App\Models\foodMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(){
        return view('menu',[
            'shortQuote' => Storage::get('shortQuote.txt'),
            'foodItems' => foodMenu::latest()->get(),
            'drinks' => foodMenu::latest()->where('category', 'drinks')->get(),
            'lunches' => foodMenu::latest()->where('category', 'lunch')->get(),
            'dinners' => foodMenu::latest()->where('category', 'dinner')->get(),
            'reviews' => CustomerReview::latest()->get()
        ]);
    }
}
