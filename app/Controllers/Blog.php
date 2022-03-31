<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Blog',
            'isi' => 'v_blog',
        );
        return view('layout/v_wrapper', $data);
    }
}
