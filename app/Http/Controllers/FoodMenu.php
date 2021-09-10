<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodMenu extends Controller
{
    public function index(){
        return view('admin.foodMenu');
    }
}
