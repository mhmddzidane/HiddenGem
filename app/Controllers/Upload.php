<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\TamuModel;

class Upload extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->TamuModel = new TamuModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Uplaod',
            'isi' => 'v_upload',
            'tamu' => $this->TamuModel->tampil_tamu(),
        );
        return view('layout/v_wrapper', $data);
    }

    public function tambah_post()
    {
        $session = session();
        $foto = $this->request->getFile('foto_post');
        $id_user = $session->get('id_user');
        $nama_foto = $foto->getRandomName();
        $data = array(
            'id_user' => $id_user,
            'judul_post' => $this->request->getPost('judul_post'),
            'foto_post' => $nama_foto,
            'desc_post' => $this->request->getPost('desc_post'),
            'range_harga' => $this->request->getPost('range_post'),
            'maps' => $this->request->getPost('maps_post'),
        );
        $foto->move('foto_post', $nama_foto); //directory upload file
        $this->ProfileModel->tambah_post($data);
        return redirect()->to(base_url('explore'));
    }
}
