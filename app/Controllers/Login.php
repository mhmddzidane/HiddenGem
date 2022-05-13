<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        echo view('v_login');
    }

    public function cek_login()
    {
        if ($this->validate([
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
        ])) { //jika valid
            $email = $this->request->getPost('email');
            $password = base64_encode($this->request->getPost('password'));
            $cek = $this->LoginModel->cek_login($email, $password);
            if ($cek) {
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                return redirect()->to(base_url('Home'));
            } else {
                session()->setFlashData('pesan', 'Login Gagal, Username atau Password Salah!');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashData('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('nama_user');
        session()->remove('email');

        session()->setFlashData('pesan', 'Anda telah Logout');
        return redirect()->to(base_url('login'));
    }
};
