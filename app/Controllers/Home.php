<?php

namespace App\Controllers;

use App\Models\TamuModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->TamuModel = new TamuModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Home',
            'isi' => 'home',
            'tamu' => $this->TamuModel->tampil_tamu(),
        );
        return view('layout/v_wrapper', $data);
    }

    public function bukutamu()
    {
        $data = array(
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'nim_tamu' => $this->request->getPost('nim_tamu'),
            'pesan_tamu' => $this->request->getPost('pesan_tamu'),
        );
        $this->TamuModel->tambah_tamu($data);
        return redirect()->to(base_url('home'));
    }
}
