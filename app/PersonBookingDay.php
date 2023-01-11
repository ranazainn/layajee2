<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonBookingDay extends Model
{
    public $timestamps = false;
    public $table = 'person_booking_days';
    protected $fillable = [
        'id','person_id','booking_id','day', 'day_sr', 'is_off'
    ]; 

}
