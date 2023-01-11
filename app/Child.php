<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    /**
     * is_special 0->normal, 1->special
     * gender 0->Male, 1->Female
     */
    public $timestamps = false;
    public $table = 'childs';
    protected $fillable = [
        'id','user_id','full_name','age','class','school_name','area','description','is_special','gender'
    ];   

    /**
     * Get all of the comments for the Child
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function booking()
    {
        return $this->belongsTo(\App\Booking::class, 'id','child_id');
    }
    public function driver()
    {
        return $this->belongsTo(\App\User::class, 'user_driver_id','id');
    }
    public function parentDetails()
    {
        return $this->belongsTo(\App\User::class, 'user_id','id');
    }
}
