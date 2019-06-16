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
}