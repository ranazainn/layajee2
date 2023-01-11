<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * pick_request 0->now, 1->later
     * trip_complete 0->not avail, 1->avail
     * booking_cancel 0->booking, 1->cancel
     * trip_booking_desc 0->combine, 1->seprate	
     */
    public $timestamps = true;
    public $table = 'bookings';
    protected $fillable = [
        'id', 'user_id', 'person_id', 'service_id', 'sub_service_id', 'pick_request', 'trip_complete',  'driver_id',
        'booking_cancel','trip_type','vehicle_types', 'km', 'estimate_time', 'pickup_address','pick_date_time','drop_address','pick_lat','pick_long','drop_lat',
        'drop_long','created_at','updated_at'
    ];

    /**
     * Get the user that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }
    public function person()
    {
        return $this->belongsTo(\App\Person::class, 'person_id', 'id');
    }
    public function sub_service()
    {
        return $this->belongsTo(\App\SubService::class, 'service_id', 'id');
    }
    public function DriverComplain()
    {
        return $this->belongsTo(\App\DriverComplain::class, 'complain_id', 'id');
    }
    public function service()
    {
        return $this->belongsTo(\App\ServiceType::class, 'service_id');
    }
    public function booking_day()
    {
        return $this->hasMany(\App\PersonBookingDay::class, 'booking_id');
    }
}
