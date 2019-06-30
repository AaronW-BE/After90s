<?php


namespace App\Service;

use App\BaseType;

class BaseTypeService extends Service
{
    public function createType($data)
    {
        return $this->create(BaseType::class, $data);
    }

    public function updateType($id, $data)
    {
        return $this->update(BaseType::class, $id, $data);
    }

    public function removeType($id)
    {
        return $this->delete(BaseType::class, $id);
    }

    public function showType($id = null, $condition = [])
    {
        return $this->get(BaseType::class, $id, $condition);
    }
}