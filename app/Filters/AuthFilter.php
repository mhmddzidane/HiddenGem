<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if (session()->get('log') != true) {
            // maka redirct ke halaman login
            session()->setFlashData('pesan', 'Anda Belum Login');
            return redirect()->to(base_url('login'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('log') == true) {
            return redirect()->to(base_url('home'));
        }
    }
}
