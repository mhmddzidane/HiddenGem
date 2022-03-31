<?php

namespace App\Controllers;

class Feed extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Feed',
            'isi' => 'v_feed',
        );
        return view('layout/v_wrapper', $data);
    }
}
