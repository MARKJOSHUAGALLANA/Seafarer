<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = ['booking_id','place'];


    public function booking() {
        return $this->belongsTo(Booking::class);
    }

    public static function list() {

        $venues = Venue::orderByRaw('place')->get();
        $list = [];
        foreach ($venues as $venue) {
            $list[$venue->id] = $venue->place;
        }
        return $list;
    }

}
