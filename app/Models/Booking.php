<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','datetime'];


    public function venues() {
        return $this->hasMany(Venue::class);
    }



    public function user() {
        return $this->belongsTo(User::class);
    }

    //

    // public static function getList() {
    //     try {
    //         $bookings = Booking::orderByRaw('datetime')->get();
    //         $list = [];
    //         foreach ($bookings as $booking) {
    //             $list[$booking->id] = $booking->datetime;
    //         }
    //         return $list;
    //     } catch (\Exception $e) {
    //         // Handle the exception (e.g., log it or return an error response)
    //         return [];
    //     }
    // }


    public static function list() {

        $bookings = Booking::orderByRaw('datetime')->get();
        $list = [];
        foreach ($bookings as $booking) {
            $list[$booking->id] = $booking->datetime;
        }
        return $list;
    }
}
