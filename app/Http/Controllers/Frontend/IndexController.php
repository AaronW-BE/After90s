<?php
/**
 * Author: AaronW
 * Create Time: 13:20
 *
 * This file is a part of After90s
 */


namespace App\Http\Controllers\Frontend;


use App\Service\BannerService;

class IndexController
{
    private $service;
    public function __construct(BannerService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $banners = $this->service->showBanner();
        return $banners;
    }
}