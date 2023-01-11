<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver_st_end extends Model
{

  public  $timestamps =true;
  protected $table="driver_st_end";
  protected $fillable=['user_id','start_time','off_time','start_location','st_lat','st_long','off_location','off_lat','off_long','created_at,updated_at'];


  public function stops()
    {
        return $this->hasMany(\App\DriverRoutes::class, 'd_id');
    }

}
