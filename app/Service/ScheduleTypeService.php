<?php


namespace App\Service;


use App\Schedule;
use App\ScheduleType;
use PhpParser\Node\Stmt\Return_;

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
        return ScheduleType::query()->where('name', 'not like', '#%#')->with(['schedules' => function($query){
            //$query->take(5);
        }])->get();
    }

    public function getTypes()
    {
        return ScheduleType::query()->get();
    }

    public function getRecommendSchedules()
    {
        $typeIds = ScheduleType::query()->where('name', 'like', '#%#')->pluck('id');
        return Schedule::query()->whereIn('schedule_type_id', $typeIds)->limit(9)->get();
    }
}