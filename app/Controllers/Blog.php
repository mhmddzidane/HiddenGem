<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Blog extends BaseController
{
    public function __construct()
    {
        $this->TamuModel = new TamuModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Blog',
            'isi' => 'v_blog',
            'tamu' => $this->TamuModel->tampil_tamu(),
        );
        return view('layout/v_wrapper', $data);
    }
}
