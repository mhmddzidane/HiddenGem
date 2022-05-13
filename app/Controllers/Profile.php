<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\TamuModel;

class Profile extends BaseController
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
            'title' => 'Profile',
            'isi' => 'v_profile',
            'user' => $this->ProfileModel->tampil_data(),
            'tampil_post' => $this->ProfileModel->tampil_post(),
            'tamu' => $this->TamuModel->tampil_tamu(),
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

    public function delete_post($id_postingan)
    {
        $data = array(
            'id_postingan' => $id_postingan,
        );
        $this->ProfileModel->hapus_postingan($data);
        return redirect()->to(base_url('profile'));
    }

    public function edit_post($id_postingan)
    {
        $foto = $this->request->getFile('foto_edit');
        //jika tidak update foto
        if ($foto == null) {
            $data = array(
                'id_postingan' => $id_postingan,
                'judul_post' => $this->request->getPost('judul_post'),
                'desc_post'  => $this->request->getPost('desc_post'),
                'range_harga' => $this->request->getPost('range_harga'),
                'maps' => $this->request->getPost('maps'),
            );
            $this->ProfileModel->edit_postingan($data);
        } else {
            //hapus foto lama
            $foto_post = $this->ProfileModel->edit_foto($id_postingan);
            if ($foto_post['foto_post'] != "") {
                unlink('foto_post/' . $foto_post['foto_post']);
            }
            //jika update foto ada
            $nama_file = $foto->getRandomName();
            $data = array(
                'id_postingan' => $id_postingan,
                'judul_post' => $this->request->getPost('judul_post'),
                'desc_post'  => $this->request->getPost('desc_post'),
                'range_harga' => $this->request->getPost('range_harga'),
                'maps' => $this->request->getPost('maps'),
                'foto_post' => $nama_file
            );
            $foto->move('foto_post', $nama_file); //directory upload file
            $this->ProfileModel->edit_postingan($data);
        }
        return redirect()->to(base_url('profile'));
    }
}
