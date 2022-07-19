<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
	}

	public function index()
	{
		$data = array(
			'title' => 'Katalog',
			'produk' => $this->m_home->produk(),
			'best_produk' => $this->m_home->best_produk(),
			'diskon' => $this->m_home->diskon(),
			'best_deal_product_transaksi' => $this->m_home->best_deal_product_transaksi(),
			'isi' => 'v_home'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_home->kategori($id_kategori);
		$data = array(
			'title' => $kategori->nama_kategori,
			'best_produk' => $this->m_home->best_produk(),
			'diskon' => $this->m_home->diskon(),
			'produk' => $this->m_home->produk_all($id_kategori),
			'isi' => 'frontend/kategori/v_kategori',
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function modal_produk($id_produk = NULL)
	{
		$data = array(
			'id_produk' => $id_produk,
		);
		$this->m_home->produk($data);
		$this->session->set_flashdata('pesan', 'Kategori Berhasil Diedit!!!');
		redirect('home');
	}

	public function detail_produk($id_produk = null)
	{
		$data = array(
			'title' => 'Detail Produk',
			'produk' => $this->m_home->detail_produk($id_produk),
			'gambar' => $this->m_home->gambar_produk($id_produk),
			'diskon' => $this->m_home->diskon(),
			'produk_lainnya' => $this->m_home->produk_lainnya($id_produk),
			'isi' => 'frontend/detail/v_produk'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
