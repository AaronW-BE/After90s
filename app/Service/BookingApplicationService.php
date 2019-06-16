<?php


namespace App\Service;


use App\Banner;
use App\BookingApplication;

class BookingApplicationService extends Service
{
    public function createBooking($data)
    {
        return $this->create(BookingApplication::class, $data);
    }

    public function removeBooking($id)
    {
        return $this->delete(BookingApplication::class, $id);
    }

    public function show($id = null, $condition = [])
    {
        return $this->get(BookingApplication::class, $id);
    }
}