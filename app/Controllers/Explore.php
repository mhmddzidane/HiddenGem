<?php

namespace App\Controllers;

use App\Models\TamuModel;
use App\Models\ExploreModel;

class Explore extends BaseController
{
    public function __construct()
    {
        $this->TamuModel = new TamuModel();
        $this->ExploreModel = new ExploreModel();
        helper('form');
    }

    public function index()
    {
        $keyword = $this->request->getPost(('keyword'));
        if ($keyword) {
            $explore = $this->ExploreModel->cari_post($keyword);
        } else {
            $explore = $this->ExploreModel->tampil_post();
        }

        $data = array(
            'title' => 'Explore',
            'isi' => 'v_explore',
            'tamu' => $this->TamuModel->tampil_tamu(),
            'explore_post' => $explore
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
