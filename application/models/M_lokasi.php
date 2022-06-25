<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_lokasi extends CI_Model
{

	public function provinsi()
	{
		$this->db->select('*');
		$this->db->from('provinsi');
		$this->db->order_by('id_provinsi', 'desc');
		return $this->db->get()->result();
	}

	public function add_provinsi($data)
	{
		$this->db->insert('provinsi', $data);
	}

	public function edit_provinsi($data)
	{
		$this->db->where('id_provinsi', $data['id_provinsi']);
		$this->db->update('provinsi', $data);
	}

	public function delete_provinsi($data)
	{
		$this->db->where('id_provinsi', $data['id_provinsi']);
		$this->db->delete('provinsi');
	}

	public function kabupaten()
	{
		$this->db->select('*');
		$this->db->from('kabupaten');
		$this->db->join('provinsi', 'kabupaten.id_provinsi = provinsi.id_provinsi', 'left');
		$this->db->order_by('id_kabupaten', 'desc');
		return $this->db->get()->result();
	}

	public function detail($id_kabupaten)
	{
		$this->db->select('*');
		$this->db->from('kabupaten');
		$this->db->join('provinsi', 'provinsi.id_provinsi = kabupaten.id_provinsi', 'left');
		$this->db->where('id_kabupaten', $id_kabupaten);
		return $this->db->get()->row();
	}

	public function add_kabupaten($data)
	{
		$this->db->insert('kabupaten', $data);
	}

	public function edit_kabupaten($data)
	{
		$this->db->where('id_kabupaten', $data['id_kabupaten']);
		$this->db->update('kabupaten', $data);
	}

	public function delete_kabupaten($data)
	{
		$this->db->where('id_kabupaten', $data['id_kabupaten']);
		$this->db->delete('kabupaten');
	}
}
