<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    public $table='promo_codes';
    protected $fillable = ['id','usr_id','p_code'];
}

