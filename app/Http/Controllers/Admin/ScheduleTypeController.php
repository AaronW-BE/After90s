<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Service\BannerService;
use App\Service\ScheduleTypeService;

class ScheduleTypeController extends Controller
{
    private $typeService;
    public function __construct(ScheduleTypeService $service)
    {
        $this->typeService = $service;
    }

    public function show($id = null)
    {
        return $this->typeService->show($id);
    }

    public function create(BannerRequest $request)
    {
        $data = $request->all();
        return $this->typeService->createType($data);
    }
}