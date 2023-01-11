<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $timestamps = false;
    public $table='vehicles';
    protected $fillable = ['name'];

    public function vehicleModel()
    {
        return $this->belongsTo(\App\VehicleModel::class, 'vehicle_id', 'id');
    }
}
