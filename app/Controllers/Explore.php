<?php

namespace App\Controllers;

use App\Models\ExploreModel;

class Explore extends BaseController
{
    public function __construct()
    {
        $this->ExploreModel = new ExploreModel();
    }

    public function index()
    {
        $data = array(
            'title' => 'Explore',
            'isi' => 'v_explore',
            'explore_post' => $this->ExploreModel->tampil_post(),
        );
        return view('layout/v_wrapper', $data);
    }
}
