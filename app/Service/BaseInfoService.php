<?php


namespace App\Service;


use App\BaseInfo;

class BaseInfoService extends Service
{
    public function createBase($data)
    {
        return $this->create(BaseInfo::class, $data);
    }

    public function updateBase($id, $data)
    {
        return $this->update(BaseInfo::class, $id, $data);
    }

    public function removeBase($id)
    {
        return $this->delete(BaseInfo::class, $id);
    }

    public function showBase($id = null, $condition = [])
    {
        return $this->get(BaseInfo::class, $id);
    }
}