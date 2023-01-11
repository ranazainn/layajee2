<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\ChildInfo;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements JWTSubject ,MustVerifyEmail
{
    use Notifiable;
   
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $fillable = [
    'name', 'email', 'gender','phone','role','password','plain_password','provider_name', 'provider_id','social_app_id','verification_code','is_verified'
    ,'image_name','img_ext','img_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'plain_password', 'remember_token','verification_code'
    ];
     public function isParent(){
         return $this->getAccountType() == 'parent';
    }

    public function getAccountType()
    {
        return $this->type;
    }

    public function parentName()
    {
        return $this->hasMany(ChildInfo::class ,'p_id', 'id');
    }
    public function vehicleDetails()
    {
        return $this->hasMany(\App\Driver::class, 'user_id','id');
    }
    public function vehicleDocs()
    {
        return $this->hasMany(\App\DriverDocs::class, 'driver_id','id');
    }
    public function PromoCode()
    {
        return $this->hasMany(\App\PromoCode::class, 'user_id','id');
    }
    public function driver_complains()
    {
        return $this->belongsTo(\App\driver_complains::class, 'complain_id', 'id');
    }

}