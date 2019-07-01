<?php
/**
 * Author: AaronW
 * Create Time: 12:42
 *
 * This file is a part of After90s
 */


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Service\ScheduleService;
use App\Service\ScheduleTypeService;

class ScheduleController extends Controller
{

    private $typeService;
    private $scheduleService;
    public function __construct(ScheduleTypeService $typeService, ScheduleService $scheduleService)
    {
        $this->typeService = $typeService;
        $this->scheduleService = $scheduleService;
    }

    public function view()
    {
        $banners = [];
        $types = $this->typeService->getTypes();
        $feeTypes = $this->scheduleService->getPriceTypes();
        $durationTypes = $this->scheduleService->getDurationTypes();
        $topRecommend = $this->scheduleService->topRecommend();
        return view('frontend.schedule',
            compact([
                'banners',
                'types',
                'durationTypes',
                'feeTypes',
                'topRecommend'
            ])
        );
    }

    public function query()
    {
        $type = request('type', "");
        $duration = request('duration', "");
        $fee = request('fee', "");

        $data = $this->scheduleService->querySchedule($type, $duration, $fee);
        return $this->retAjax($data);
    }

    public function detail($id)
    {
        $schedule = $this->scheduleService->getScheduleDetail($id);
        return view('frontend/schedule_detail',
            compact([
                'schedule'
            ])
        );
    }
}