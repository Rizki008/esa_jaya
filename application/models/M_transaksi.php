<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{

	public function simpan_transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}

	public function simpan_rinci($data_rinci)
	{
		$this->db->insert('rinci_transaksi', $data_rinci);
	}

	public function upload_buktibayar($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi', $data);
	}
	//grafik
	public function grafik()
	{
		$this->db->select_sum('qty');
		$this->db->select('produk.nama_produk');
		//$this->db->select('rinci_transaksi.qty');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->group_by('rinci_transaksi.id_produk');
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}

	public function grafik_pelanggan()
	{
		return $this->db->query("SELECT COUNT(no_order) AS total, pelanggan.nama FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan GROUP BY transaksi.id_pelanggan;")->result();
	}

	public function belum_bayar()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('status_order=0');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
	public function diproses()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('status_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
	public function dikirim()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('status_order=2');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
	public function selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('status_order=3');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function detail_pesanan($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->get()->row();
	}

	public function pesanan_detail($no_order)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->join('rinci_transaksi', 'transaksi.no_order = rinci_transaksi.no_order', 'left');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->where('transaksi.no_order', $no_order);
		return $this->db->get()->result();
	}
	public function rekening()
	{
		$this->db->select('*');
		$this->db->from('rekening');
		return $this->db->get()->result();
	}
}
