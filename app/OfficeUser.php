<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeUser extends Model
{
     /**
     * gender 0->Male, 1->Female
     */
    public $timestamps = false;
    public $table = 'offices_user';
    protected $fillable = [
        'id','user_id','full_name','phone_num','gender','description'
    ]; 
    
    public function booking()
    {
        return $this->belongsTo(\App\Booking::class, 'id','office_user_id');
    }
    public function driver()
    {
        return $this->belongsTo(\App\User::class, 'user_driver_id','id');
    }
}
