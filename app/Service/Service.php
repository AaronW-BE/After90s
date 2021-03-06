<?php


namespace App\Service;


use App\Helpers\ApiResponse;

abstract class Service
{
    use ApiResponse;

    protected function create($model, $data)
    {
        $res = $model::query()->create($data);
        return $this->success("创建成功");
    }

    protected function delete($model, $id)
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

    protected function update($model, $id, $data)
    {
        try {
            $updated = $model::query()->where('id', $id)->update($data);
            if ($updated) {
                if ($this->isNeedJson()) {
                    return $this->success("更新成功");
                }
                return true;
            }
            throw new \Exception("更新失败");
        } catch (\Exception $e) {
            return $this->failed($e->getMessage());
        }
    }

    protected function get($model, $id = null, $condition = [], $pagination = true)
    {
        if ($id) {
            $res = $model::query()->find($id);
        }else{
            $perPage = request('per_page', 99);
            $query = $model::query()->where($condition);
            $res = $pagination ? $query->paginate($perPage) : $query->get();
        }
        if ($this->isNeedJson()) {
            return $this->success($res);
        }
        return $res;
    }

    private function isNeedJson()
    {
        $contentType = request()->headers->get('Content-type');
        if ($contentType === "application/json") {
            return true;
        }
        return false;
    }
}