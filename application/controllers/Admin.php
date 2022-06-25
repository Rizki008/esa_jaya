<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan_masuk');
		$this->load->model('m_transaksi');
		$this->load->model('m_admin');
	}
	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'total_produk' => $this->m_admin->total_produk(),
			'total_pesanan' => $this->m_admin->total_pesanan(),
			'total_pelanggan' => $this->m_admin->total_pelanggan(),
			'total_transaksi' => $this->m_admin->total_transaksi(),
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'v_admin'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}


	public function proses($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'status_order' => 1
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di proses');
		redirect('transaksi/pesanan');
	}

	public function batal($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'catatan' => $this->input->post('catatan'),
			'status_order' => 4
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Batalkan');
		redirect('transaksi/proses');
	}

	public function kirim($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'nama_pengirim' => $this->input->post('nama_pengirim'),
			'status_order' => 2
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di kirim');
		redirect('transaksi/proses');
	}

	public function detail($no_order)
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan_detail' => $this->m_transaksi->pesanan_detail($no_order),
			'diproses_pesanan' => $this->m_pesanan_masuk->diproses_pesanan(),
			'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
			'isi' =>  'backend/transaksi/v_detail'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
}
