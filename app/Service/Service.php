<?php


namespace App\Service;


use App\Helpers\ApiResponse;

abstract class Service
{
    use ApiResponse;

    public function create($model, $data)
    {
        $res = $model::query()->create($data);
        return $this->success($res);
    }

    public function delete($model, $id)
    {
        try {
            $res = $model::destroy($id);
            if ($res) {
                return $this->success("删除成功");
            }
            throw new \Exception("删除失败");
        } catch (\Exception $e) {
            return $this->failed($e->getMessage());
        }
    }

    public function update($model, $id, $data)
    {
        try {
            $updated = $model::query()->where('id', $id)->update($data);
            if ($updated) {
                return $this->success("更新成功");
            }
            throw new \Exception("更新失败");
        } catch (\Exception $e) {
            return $this->failed($e->getMessage());
        }
    }

    public function get($model, $id = null)
    {
        if ($id) {
            $res = $model::query()->find($id);
        }else{
            $perPage = request('per_page', 15);
            $res = $model::query()->paginate($perPage);
        }
        return $this->success($res);
    }
}