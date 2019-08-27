<?php
/**
 * Author: AaronW
 * Create Time: 13:20
 *
 * This file is a part of After90s
 */


namespace App\Http\Controllers\Frontend;


use App\Service\BannerService;
use App\Service\BaseInfoService;
use App\Service\PartnerService;
use App\Service\ScheduleTypeService;

class IndexController
{
    private $service;
    private $typeService;
    private $partnerService;
    private $baseService;
    public function __construct(BannerService $service, ScheduleTypeService $typeService, PartnerService $partnerService)
    {
        $this->service = $service;
        $this->typeService = $typeService;
        $this->partnerService = $partnerService;
        $this->baseService = new BaseInfoService();
    }

    public function index()
    {
        $banners = $this->service->showBanner();
        $cateWithSchedule = $this->typeService->showTypesWithCategory();

        $recommendSchedule = $this->typeService->getRecommendSchedules();
        $partners = $this->partnerService->getPartners();
        $baseList = $this->baseService->getTopBaseInfo();

        return view('frontend.index', compact([
            'banners',
            'cateWithSchedule',
            'partners',
            'baseList',
            'recommendSchedule']));
    }
}