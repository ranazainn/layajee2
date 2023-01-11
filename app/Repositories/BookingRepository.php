<?php

namespace App\Repositories;

use App\Booking;
use App\Person;
use App\PersonBookingDay;
use Illuminate\Support\Facades\Auth;

class BookingRepository implements BookingRepositoryInterface
{

    public function __construct()
    {

        $this->model = new Booking();
        $this->model_person = new Person();
        $this->model_booking_days = new PersonBookingDay();
    }
    public function getAllBooking()
    {
        return $this->model->all();
    }
    public function creates($obj)
    {
        return $this->model->create($obj);
    }
    public function getAllBookingAuthUser()
    {
       $userID= Auth::user()->id;
       $getBooKing = $this->model->getModel()::select('bookings.*')->with('user','person','booking_day','service','sub_service')
       ->where('user_id', $userID)
       ->get();
       return $getBooKing;
    }

    public function bookingUpdate(array $obj, $id)
    {
        $personId = $this->model_person->find($id);
        $person_booking = $this->model::getModel()->where('person_id', $personId->id)->update($obj);
        return $person_booking;
    }
 
}