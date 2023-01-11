<?php

namespace App\Repositories;

interface BookingRepositoryInterface
{
    public function creates($obj); 
    public function getAllBookingAuthUser();
    public function bookingUpdate(array $obj, $id);
}