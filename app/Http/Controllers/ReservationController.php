<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index(){
        return view('reservation');
    }

    public function storeReservation(Request $request){

        $request->validate([
            'date' => 'required',
            'timeFrom' => 'required',
            'timeTo' => 'required',
            'numberOfPerson' => 'required',
            'customer_name' => 'required|min:3|max:30',
            'customer_email' => 'required|email|max:30',
            'customer_phone' => 'required|min:6|max:15'
        ]);

        Reservation::create([

            'user_id' => Auth::id(),
            'date' =>$request->date,
            'from' => $request->timeFrom,
            'to' => $request->timeTo,
            'number_of_person' => $request->numberOfPerson,
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'status' => 'deactivate'

        ]);

        return redirect(route('reservation'));
    }
}
