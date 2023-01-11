<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class ChildInfo extends Model
{
    public $timestamps = false;
    public $table = 'child_info';
    protected $appends = ['parent_name'];
    protected $fillable = [
        'id', 'p_id', 'child_name', 'gender', 'pickup_time', 'drop_off_time', 'special_child', 'pickup_location', 'drop_off_location', 'vehicle_type', 'p_lat', 'p_long', 'd_lat', 'd_long'
    ];


    protected $hidden = [
        'password',
    ];

    public function getParentNameAttribute()
    {

        $p_id = $this->attributes['p_id'];
        $data = User::find($p_id);

        return $data->name;
    }
}