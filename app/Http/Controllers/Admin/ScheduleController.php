<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleRequest;
use App\Service\ScheduleService;

class ScheduleController extends Controller
{

    private $scheduleService;
    public function __construct(ScheduleService $service)
    {
        $this->scheduleService = $service;
    }

    public function show($id = null)
    {
        return $this->scheduleService->showSchedule($id);
    }

    public function create(ScheduleRequest $request)
    {
        $data = $request->all();
        return $this->scheduleService->createSchedule($data);
    }
}