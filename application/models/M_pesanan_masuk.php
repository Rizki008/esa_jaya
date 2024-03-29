<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan_masuk extends CI_Model
{
	public function pesanan()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('status_order=0');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
	public function pesanan_langsung()
	{
		$this->db->select('*');
		$this->db->from('transaksi_langsung');
		// $this->db->join('rinci_langsung', 'transaksi_langsung.no_jual=rinci_langsung.no_jual', 'left');
		$this->db->where('status_belanja=0');
		$this->db->order_by('id_belanja', 'desc');
		return $this->db->get()->result();
	}
	public function pesanan_langsung_selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi_langsung');
		// $this->db->join('rinci_langsung', 'transaksi_langsung.no_jual=rinci_langsung.no_jual', 'left');
		$this->db->where('status_belanja=1');
		$this->db->order_by('id_belanja', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_diproses()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('status_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_dikirim()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('status_order=2');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('status_order=3');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function pesanan_dibatalkan()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('status_order=4');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function update_order($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi', $data);
	}
	public function update_order_langsung($data)
	{
		$this->db->where('id_belanja', $data['id_belanja']);
		$this->db->update('transaksi_langsung', $data);
	}

	public function diproses_pesanan()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('rinci_transaksi', 'transaksi.no_order = rinci_transaksi.no_order', 'left');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		return $this->db->get()->row();
	}

	public function proses_kirim()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		return $this->db->get()->result();
	}
}
