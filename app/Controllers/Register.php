<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        echo view('v_register');
    }

    public function cek_register()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Username',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username Wajib diisi!!',
                ],
            ],
            'email' => [
                'label'  => 'e-mail',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Email Wajib diisi!!',
                ],
            ],
            'password' => [
                'label'  => 'password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Password Wajib diisi!!',
                ],
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ]
        ])) { //jika valid
            $model = new UserModel();
            $data = [
                'nama_user'     => $this->request->getVar('nama_user'),
                'email'    => $this->request->getVar('email'),
                'password' => base64_encode($this->request->getVar('password'))
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            session()->setFlashData('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/register'));
        }
    }
};
