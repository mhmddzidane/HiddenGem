<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        helper('form');
    }

    public function index()
    {
        $data = array(
            'title' => 'Profile',
            'isi' => 'v_profile',
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
