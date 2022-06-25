<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
	public function kabupaten($id_provinsi)
	{
		$this->db->select('*');
		$this->db->from('kabupaten');
		$this->db->where('id_provinsi=', $id_provinsi);
		return $this->db->get()->result();
	}
	public function register()
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('pelanggan', $data);
	}
}

/* End of file M_pelanggan.php */
