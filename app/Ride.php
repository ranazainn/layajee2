<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    public $timestamps = true;
    public $table='rides';
    protected $fillable = ['usr_id','service_id','created_at','updated_at'];
}