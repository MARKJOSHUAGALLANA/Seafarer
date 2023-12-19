<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $b = Booking::orderBy('id')->get();

        return view('booking.index', ['bookings' => $b]);
    }

    public function create() {

        $users = User::list();
        return view('booking.create', ['users' => $users]);
    }

    public function store(Request $request) {

        $request->validate([
            'user_id' => 'required|numeric',
            'datetime' => 'required'
        ]);

        Booking::create([
            'user_id' => $request->user_id,
            'datetime' => $request->datetime
        ]);

        return redirect('/bookings')->with('message', 'A new user has been added');
    }
//
    public function edit(Booking $booking) {

        return view('booking.edit',compact('booking'));
    }

    public function update(Booking $booking, Request $request) {

        $request->validate([
            'datetime' => 'required'
        ]);

        $booking->update($request->all());
        return redirect('/bookings')->with('message', " $booking->datetime has been updated successfully");
    }

//
    public function delete(Booking $booking)
    {
        $booking->delete();

        return redirect('/bookings')->with('message', " $booking->datetime has been deleted successfully");
    }

    // public static function list() {

    //     $bookings = Booking::orderByRaw('datetime')->get();
    //     $list = [];
    //     foreach ($bookings as $booking) {
    //         $list[$booking->id] = $booking->datetime;
    //     }
    //     return $list;
    // }

}

