<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_ongkir extends CI_Model
{

	public function lokasi()
	{
		$this->db->select('*');
		$this->db->from('lokasi');
		$this->db->order_by('id_lokasi', 'desc');
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('lokasi', $data);
	}

	//Update one item
	public function edit($data)
	{
		$this->db->where('id_lokasi', $data['id_lokasi']);
		$this->db->update('lokasi', $data);
	}

	//Delete one item
	public function delete($data)
	{
		$this->db->where('id_lokasi', $data['id_lokasi']);
		$this->db->delete('lokasi', $data);
	}
}

/* End of file M_barang.php */
