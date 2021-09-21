<?php

namespace App\Http\Controllers;

use App\Models\CustomerReview;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    public function index(){
        return view('stuff', [
            'reviews' => CustomerReview::latest()->get()
        ]);
    }
}
