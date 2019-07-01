<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;
use App\Service\BookingApplicationService;
use App\Service\ScheduleService;

class BookingApplicationController extends Controller
{

    private $bookingService;
    public function __construct(BookingApplicationService $service)
    {
        $this->bookingService = $service;
    }

    public function show($id = null)
    {
        return $this->bookingService->show($id);
    }

    public function create(ScheduleRequest $request)
    {
        $data = $request->all();
        return $this->bookingService->createBooking($data);
    }

    public function apply()
    {
        $schedule_id = request('schedule_id');
        $departure_date = request('date');
        $name = request('name');
        $contact = request('phone');
        $people_count = request('people_count');
        $remarks = request('remarks');
        return $this->bookingService->createBooking(compact([
            'schedule_id',
            'contact',
            'name',
            'departure_date',
            'people_count',
            'remarks'
        ]));

    }
}