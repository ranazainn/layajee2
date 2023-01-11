<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public $timestamps = true;
    public $table='drivers';
   
    protected $fillable = ['user_id','vehicle_id','vehicle_model_id','veh_type_id','vehicle_number_plate','vehicle_color','vehicle_year','vehicle_seats','occupied_seats','start_time','off_time','stat_location','st_lat','st_long','off_location','off_lat','off_long','created_at','updated_at'];
    public function vehicle()
    {
        return $this->belongsTo(\App\Vehicle::class, 'vehicle_id','id');
    }
    public function vehicleModel()
    {
        return $this->belongsTo(\App\VehicleModel::class,'vehicle_model_id', 'id');
    }
    public function DriverComplain()
    {
        return $this->belongsTo(\App\DriverComplain::class, 'complain_id', 'id');
    }

}
