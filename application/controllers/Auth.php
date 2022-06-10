<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function user_login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('username' => '%s Mohon Untuk diisi!!!'));
        $this->form_validation->set_rules('password', 'Password', 'required', array('password' => '%s Mohon Untuk diisi!!!'));


        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password =  $this->input->post('password');
            $this->user_login->login($username, $password);
        } else {
            $data = array(
                'title' => 'Login User',
            );
            $this->load->view('v_login_admin', $data, FALSE);
        }
    }

    public function logout()
    {
        $this->user_login->logout();
    }
}
