<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Katalog Esa Jaya',
            'isi' => 'v_home'
        );
        $this->load->view('frontend/v_wrapper', $data, FALSE);
    }
}
