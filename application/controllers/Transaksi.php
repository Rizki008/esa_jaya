<?php

defined('BASEPATH') or exit('No direct scropt access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan_masuk');
		$this->load->model('m_transaksi');
	}
	public function pesanan()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			'isi' => 'backend/transaksi/v_pesanan'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function kirim()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'pesanan_dikirim' => $this->m_pesanan_masuk->pesanan_dikirim(),
			'isi' => 'backend/transaksi/v_kirim'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function proses()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'pesanan_diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
			'isi' => 'backend/transaksi/v_proses'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function selesai()
	{
		$data = array(
			'title' => 'Pesanan Masuk',
			'pesanan_selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
			'isi' => 'backend/transaksi/v_selesai'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function analisis_produk()
	{
		$data = array(
			'title' => 'Analisis Produk',
			'grafik' => $this->m_transaksi->grafik(),
			'isi' => 'backend/analisis/v_produk'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function analisis_pelanggan()
	{
		$data = array(
			'title' => 'Analisis Pelanggan',
			'grafik' => $this->m_transaksi->grafik_pelanggan(),
			'isi' => 'backend/analisis/v_pelanggan'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
}
