<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    public $timestamps = false;
    public $table='vehicle_models';
    protected $fillable = ['name','vehicle_id'];
    public function vehicleType()
    {
        return $this->belongsTo(\App\VehicleType::class, 'veh_type_id', 'id');
    }
}
