<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctype extends Model
{
    public $timestamps = false;
    public $table='doc_type';  
    protected $fillable = ['type','role_id'];
}