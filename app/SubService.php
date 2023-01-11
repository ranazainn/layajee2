<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    public $timestamps = false;
    public $table='sub_services';
    protected $fillable = ['id','service_id'];

    
}
