<?php
/**
 * Author: AaronW
 * Create Time: 12:45
 *
 * This file is a part of After90s
 */


namespace App\Http\Controllers\Frontend;


class BaseController
{

    public function view()
    {
        $banners = [];
        return view('frontend.base', compact([
            'banners',

        ]));
    }

    public function detail($id)
    {

    }
}