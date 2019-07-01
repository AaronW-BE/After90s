<?php


namespace App\Service;


use App\ScheduleType;

class ScheduleTypeService extends Service
{
    public function createType($data)
    {
        return $this->create(ScheduleType::class, $data);
    }

    public function updateType($id, $data)
    {
        return $this->update(ScheduleType::class, $id, $data);
    }

    public function removeType($id)
    {
        return $this->delete(ScheduleType::class, $id);
    }

    public function show($id = null, $condition = [])
    {
        return $this->get(ScheduleType::class, $id, $condition);
    }

    public function showTypesWithCategory()
    {
        return ScheduleType::query()->with(['schedules' => function($query){
            $query->take(5);
        }])->get();
    }

    public function getTypes()
    {
        return ScheduleType::query()->get();
    }
}