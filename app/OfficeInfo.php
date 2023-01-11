<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeInfo extends Model
{
    public $table='office_info';
    public $timestamps = false;
    protected $appends = ['name'];
    protected $fillable = [
        'id','user_id','pickup_time', 'drop_off_time','pickup_location','drop_off_location','vehicle_type','p_lat','p_long','d_lat','d_long'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    // ];

    public function getNameAttribute(){
        
        $user_id=$this->attributes['user_id'];
        $data=User::find($user_id);

        return $data;
        
    }


}
