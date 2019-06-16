<?php


namespace App\Service;


use App\BaseInfo;
use App\BusinessCase;

class CaseService extends Service
{
    public function createCase($data)
    {
        return $this->create(BusinessCase::class, $data);
    }

    public function updateCase($id, $data)
    {
        return $this->update(BusinessCase::class, $id, $data);
    }

    public function removeCase($id)
    {
        return $this->delete(BusinessCase::class, $id);
    }

    public function showCase($id = null, $condition = [])
    {
        return $this->get(BusinessCase::class, $id);
    }
}