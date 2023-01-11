<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps = false;
    public $table = 'persons';
    protected $fillable = [
        'id','user_id','name','phone','age','class','school_name','area','description','is_special','gender',
        'driver_id'
    ]; 

    public function booking()
    {
        return $this->belongsTo(\App\Booking::class, 'id','person_id');
    }
    public function booking_day()
    {
        return $this->hasMany(\App\PersonBookingDay::class, 'person_id');
    }
    public function driver_complains()
    {
        return $this->belongsTo(\App\driver_complains::class, 'complain_id', 'id');
    }
    
}
