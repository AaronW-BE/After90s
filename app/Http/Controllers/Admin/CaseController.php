<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Service\BannerService;
use App\Service\CaseService;

class CaseController extends Controller
{
    private $caseService;
    public function __construct(CaseService $service)
    {
        $this->caseService = $service;
    }

    public function show($id = null)
    {
        return $this->caseService->showCase($id);
    }

    public function create(BannerRequest $request)
    {
        $data = $request->all();
        return $this->caseService->createCase($data);
    }
}