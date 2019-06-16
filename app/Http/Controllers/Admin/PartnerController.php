<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Service\BannerService;
use App\Service\PartnerService;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    private $partnerService;
    public function __construct(PartnerService $service)
    {
        $this->partnerService = $service;
    }

    public function show($id = null)
    {
        return $this->partnerService->showPartner($id);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        return $this->partnerService->createPartner($data);
    }
}