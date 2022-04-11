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
            'user' => $this->ProfileModel->tampil_data(),
            'tampil_post' => $this->ProfileModel->tampil_post(),
        );
        return view('layout/v_wrapper', $data);
    }

    public function edit_profile()
    {
        $session = session();
        $id_user = $session->get('id_user');
        $data = array(
            'id_user' => $id_user,
            'nama_user' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => base64_encode($this->request->getVar('password'))
        );
        $this->ProfileModel->edit_profile($data);
        return redirect()->to(base_url('profile'));
    }
}
