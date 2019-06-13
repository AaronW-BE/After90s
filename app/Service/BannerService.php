<?php


namespace App\Service;


use App\Banner;

class BannerService extends Service
{
    public function createBanner($data)
    {
        return $this->create(Banner::class, $data);
    }

    public function updateBanner($id, $data)
    {
        return $this->update(Banner::class, $id, $data);
    }

    public function removeBanner($id)
    {
        return $this->delete(Banner::class, $id);
    }

    public function showBanner($id = null, $condition = [])
    {
        $condition['enable'] = 1;
        return $this->get(Banner::class, $id, $condition, false);
    }
}