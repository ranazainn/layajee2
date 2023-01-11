<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverComplain extends Model
{
    protected $table ='driver_complains';
    protected $fillable =['id','user_id','person_id','booking_id','driver_id','complaint'];

    public function user()
{
    return $this->belongsTo(\App\User::class, 'user_id', 'id');
}
public function person()
    {
        return $this->belongsTo(\App\Person::class, 'person_id', 'id');
    }
public function driver()
    {
        return $this->belongsTo(\App\Driver::class, 'driver_id', 'id');
    }
public function booking()
    {
        return $this->belongsTo(\App\Booking::class, 'booking_id', 'id');
    }
}
