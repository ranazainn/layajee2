<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public $timestamps = false;
    public $table='services';
    protected $fillable = ['id'];
   
}