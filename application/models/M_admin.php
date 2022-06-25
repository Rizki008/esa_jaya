<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function total_produk()
	{
		return $this->db->get('produk')->num_rows();
	}

	public function total_pesanan()
	{
		$this->db->where('status_order=0');
		return $this->db->get('transaksi')->num_rows();
	}

	public function total_pelanggan()
	{
		return $this->db->get('pelanggan')->num_rows();
	}

	public function total_transaksi()
	{
		$this->db->where('status_order=3');
		return $this->db->get('transaksi')->num_rows();
	}

	public function data_setting()
	{
		$this->db->select('*');
		$this->db->from('setting');
		$this->db->where('id', 1);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('setting', $data);
	}

	public function grafik()
	{
		$this->db->select('*');
		return $this->db->get('transaksi')->result();
	}

	public function data_grafik($data)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where($data);
		$this->db->group_by('produk');
		return $this->db->get()->result();
	}

	public function get_produk()
	{
		$this->db->select('distinct(nama_produk)');
	}

	public function data_stock()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('rinci_transaksi', 'produk.id_produk=rinci_transaksi.id_produk', 'left');
		$this->db->where('stock <=100');
		$this->db->order_by('stock', 'desc');
		return $this->db->get()->result();
	}

	public function status_transaksi()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		//$this->db->where('status_order=1');
		$this->db->where('status_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function status_transaksi_selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		//$this->db->where('status_order=1');
		$this->db->where('status_order=3');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
}
