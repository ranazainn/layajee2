<?php

namespace App;
use Ride;

use Illuminate\Database\Eloquent\Model;

class RideDetails extends Model
{
    public $timestamps = false;
    public $table='ride_details';
    protected $fillable = [
        'id','ride_id','child_name','gender', 'pickup_time', 'drop_off_time','special_child','pickup_location','drop_off_location','vehicle_type','p_lat','p_long','d_lat','d_long'
    ];

}
