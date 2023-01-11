<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    public $timestamps = false;
    public $table='vehicle_types';
    protected $fillable = ['name'];

}
