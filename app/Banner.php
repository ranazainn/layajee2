<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $timestamps = false;
    public $table = 'banners';
    protected $fillable = [
        'id','name','doc_path'
    ]; 
}
