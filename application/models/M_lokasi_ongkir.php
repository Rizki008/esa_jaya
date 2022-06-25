<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_lokasi_ongkir extends CI_Model
{

	public function lokasi()
	{
		$this->db->select('*');
		$this->db->from('lokasi');
		$this->db->order_by('id_lokasi', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('lokasi', $data);
	}

	public function update($data)
	{
		$this->db->where('id_lokasi', $data['id_lokasi']);
		$this->db->update('lokasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_lokasi', $data);
		$this->db->delete('lokasi');
	}
}
