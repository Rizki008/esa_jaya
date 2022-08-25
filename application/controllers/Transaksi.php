<?php

defined('BASEPATH') or exit('No direct scropt access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pesanan_masuk');
		$this->load->model('m_transaksi');
		$this->load->model('m_master_produk');
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

	public function diterima($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'status_order' => 3
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Telah Diterima');
		redirect('transaksi/pesanan');
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

	public function transaksi_langsung()
	{
		$data = array(
			'title' => 'Transaksi Langsung',
			'produk' => $this->m_transaksi->produk(),
			'pesanan_langsung' => $this->m_pesanan_masuk->pesanan_langsung(),
			'pesanan_langsung_selesai' => $this->m_pesanan_masuk->pesanan_langsung_selesai(),
			'isi' => 'backend/transaksi_langsung/v_transaksi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function pesan()
	{
		$id_produk = $this->input->post('id_produk');
		$data = array(
			'id' => $this->input->post('id'),
			'qty' => $this->input->post('qty'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
		);
		$this->cart->insert($data);
		$this->session->set_flashdata('pesan', 'Berhasil');
		redirect('transaksi/transaksi_langsung/' . $id_produk);
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('transaksi/transaksi_langsung');
	}

	public function checkout()
	{
		// $id_produk = $this->input->post('id_produk');
		$data = array(
			'no_jual' => $this->input->post('no_jual'),
			'tgl_belanja' => date('Y-m-d'),
			'total_harga' => $this->input->post('total_harga'),
			'status_belanja' => '0',
		);
		$this->m_transaksi->simpan_transaksi_langsung($data);
		//simppan belanja langsung ke rinci
		$i = 1;
		foreach ($this->cart->contents() as $item) {
			$data_rinci_langsung = array(
				'no_jual' => $this->input->post('no_jual'),
				'id_produk' => $item['id'],
				'tgl_jual' => date('Y-m-d'),
				'qty' => $this->input->post('qty' . $i++)
			);
			$this->m_transaksi->simpan_rinci_langsung($data_rinci_langsung);
		}
		$this->cart->destroy();
		redirect('transaksi/transaksi_langsung');
	}

	public function bayar($id_belanja)
	{
		$data = array(
			'id_belanja' => $id_belanja,
			'Jumlah_bayar' => $this->input->post('Jumlah_bayar'),
			'status_belanja' => 1
		);
		$this->m_pesanan_masuk->update_order_langsung($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Batalkan');
		redirect('transaksi/transaksi_langsung');
	}
}
