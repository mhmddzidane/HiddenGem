<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'About',
            'isi' => 'v_about'
        );
        return view('layout/v_wrapper', $data);
    }
}
