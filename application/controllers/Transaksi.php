<?php

defined('BASEPATH') or exit('No direct scropt access allowed');

class Transaksi extends CI_Controller
{

    public function pesanan()
    {
        $data = array(
            'title' => 'Pesanan Masuk',
            'isi' => 'backend/transaksi/v_pesanan'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function kirim()
    {
        $data = array(
            'title' => 'Pesanan Masuk',
            'isi' => 'backend/transaksi/v_kirim'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function proses()
    {
        $data = array(
            'title' => 'Pesanan Masuk',
            'isi' => 'backend/transaksi/v_proses'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function selesai()
    {
        $data = array(
            'title' => 'Pesanan Masuk',
            'isi' => 'backend/transaksi/v_selesai'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
}
