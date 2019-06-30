<?php


namespace App\Service;


use App\Banner;
use App\Partner;

class PartnerService extends Service
{
    public function createPartner($data)
    {
        return $this->create(Partner::class, $data);
    }

    public function updatePartner($id, $data)
    {
        return $this->update(Partner::class, $id, $data);
    }

    public function removePartner($id)
    {
        return $this->delete(Partner::class, $id);
    }

    public function showPartner($id = null, $condition = [])
    {
        return $this->get(Partner::class, $id, $condition);
    }

    public function getPartners()
    {
        return Partner::all();
    }
}