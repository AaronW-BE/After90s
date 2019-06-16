<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Service\BaseInfoService;

class BaseInfoController extends Controller
{
    private $baseService;
    public function __construct(BaseInfoService $service)
    {
        $this->baseService = $service;
    }

    public function show($id = null)
    {
        return $this->baseService->showBase($id);
    }

    public function create(BannerRequest $request)
    {
        $data = $request->all();
        return $this->baseService->createBase($data);
    }
}