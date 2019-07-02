<?php
/**
 * Author: AaronW
 * Create Time: 12:45
 *
 * This file is a part of After90s
 */


namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Service\BaseInfoService;
use App\Service\BaseTypeService;

class BaseController extends Controller
{

    private $typeService;
    private $baseService;
    public function __construct(BaseTypeService $typeService, BaseInfoService $infoService)
    {
        $this->typeService = $typeService;
        $this->baseService = $infoService;
    }

    public function view()
    {
        $banners = [];

        $baseTypes = $this->typeService->getTypes();
        return view('frontend.base', compact([
            'banners',
            'baseTypes'
        ]));
    }

    public function detail($id)
    {
        $baseInfo = $this->baseService->getBaseInfo($id);
        return view('frontend.base-detail', compact([
            'baseInfo'
        ]));
    }

    public function query()
    {
        $typeId = request('type_id');
        $res = $this->baseService->query($typeId);
        return $this->retAjax($res);
    }
}