<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Service\BaseInfoService;
use App\Service\BaseTypeService;

class BaseTypeController extends Controller
{
    private $baseTypeService;
    public function __construct(BaseTypeService $service)
    {
        $this->baseTypeService = $service;
    }

    public function show($id = null)
    {
        return $this->baseTypeService->showType($id);
    }

    public function create(BannerRequest $request)
    {
        $data = $request->all();
        return $this->baseTypeService->createType($data);
    }

    public function remove($id)
    {
        return $this->baseTypeService->removeType($id);
    }
}