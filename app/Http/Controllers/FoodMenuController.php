<?php

namespace App\Http\Controllers;

use App\Models\foodMenu;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    public function index(){

        return view('admin.foodMenu',[
            'foodMenus' => foodMenu::latest()->get(),
        ]);
    }

    public function storeFood(Request $request){

        $request->validate([
            'name' => 'required|min:3|max:20',
            'ingredients' => 'required|min:20|max:60',
            'category' => 'required',
            'price' => 'required',
            'thumbnail' => 'required'
        ]);

        foodMenu::create([

            'name' => $request->name,
            'ingredients' => $request->ingredients,
            'category' => $request->category,
            'price' => $request->price,
            'thumbnail' => $request->file('thumbnail')->store('foodItems')

        ]);

        return redirect(route('foodMenus'));
    }

    public function deleteFood(foodMenu $foodMenu){
        $foodMenu->delete();

        return redirect(route('foodMenus'))->with('success', 'Food Item Deleted Successfully!');
    }
}
