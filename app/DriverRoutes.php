<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverRoutes extends Model
{
  public $timestamps=true;
  protected $table="driver_routes";
  protected  $fillable=['user_id','d_id','location_name','loc_lat','loc_long','created_at','updated_at'];

}
