<?php

namespace App\Controllers;

use App\Models\ExploreModel;
use App\Models\KomentarModel;

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

    public function komentar()
    {
        $komen = array(
            'isi' => 'v_explore',
            'komentar' => $this->KomentarModel->tampil_komentar()
        );
        return view('layout/v_wrapper', $komen);
    }
}
