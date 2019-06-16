<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Service\BannerService;

class BannerController extends Controller
{
    private $bannerService;
    public function __construct(BannerService $service)
    {
        $this->bannerService = $service;
    }

    public function show($id = null)
    {
        return $this->bannerService->showBanner($id);
    }

    public function create(BannerRequest $request)
    {
        $data = $request->all();
        return $this->bannerService->createBanner($data);
    }
}