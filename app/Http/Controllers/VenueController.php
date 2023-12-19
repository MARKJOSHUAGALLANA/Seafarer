<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        $v = Venue::orderBy('id')->get();

        return view('venue.index', ['venues' => $v]);
    }
//
    public function create() {

        $bookings = Booking::list();
        return view('venue.create', ['bookings' => $bookings]);
    }

    public function store(Request $request) {

        $request->validate([
            'booking_id' => 'required|numeric',
            'place' => 'required'
        ]);

        Venue::create([
            'booking_id' => $request->booking_id,
            'place' => $request->place
        ]);

        return redirect('/venues')->with('message', 'A new user has been added');
    }

    public function edit(Venue $venue) {

        return view('venue.edit',compact('venue'));
    }

    public function update(Venue $venue, Request $request) {

        $request->validate([
            'place' => 'required'
        ]);

        $venue->update($request->all());
        return redirect('/venues')->with('message', " $venue->place has been updated successfully");
    }


    public function delete(Booking $venue)
    {
        $venue->delete();

        return redirect('/venues')->with('message', " $venue->place has been deleted successfully");
    }
}
