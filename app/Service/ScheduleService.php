<?php


namespace App\Service;




use App\Schedule;

class ScheduleService extends Service
{
    public function createSchedule($data)
    {
        return $this->create(Schedule::class, $data);
    }

    public function updateSchedule($id, $data)
    {
        return $this->update(Schedule::class, $id, $data);
    }

    public function removeSchedule($id)
    {
        return $this->delete(Schedule::class, $id);
    }

    public function showSchedule($id = null, $condition = [])
    {
        return $this->get(Schedule::class, $id);
    }

    public function getScheduleDetail($id)
    {
        return Schedule::query()->findOrFail($id);
    }

    public function topRecommend($top = 5)
    {
        return Schedule::query()->orderByDesc('created_at')->take($top)->get();
    }

    public function getDurationTypes()
    {
        return Schedule::query()->distinct()->pluck('duration');
    }

    public function getPriceTypes()
    {
        return Schedule::query()->distinct()->pluck('price');
    }

    public function querySchedule($typeId, $duration, $price)
    {
        $query = Schedule::query();
        if (!empty($typeId)) {
            $query->where('schedule_type_id', $typeId);
        }

        if (!empty($duration)) {
            $query->where('duration', 'like', "%$duration%");
        }

        if (!empty($price)) {
            $query->where('price', "like", "%$price%");
        }
        return $query->get();
    }
}