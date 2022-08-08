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

	//riset password
	public function getUserInfo($id)
	{
		$q = $this->db->get_where('pelanggan', array('id_pelanggan' => $id), 1);
		if ($this->db->affected_rows() > 0) {
			$row = $q->row();
			return $row;
		} else {
			error_log('NO pelanggan found getUserInfor(' . $id . ')');
			return false;
		}
	}

	public function getUserInfoByEmail($email)
	{
		$q = $this->db->get_where('pelanggan', array('email' => $email), 1);
		if ($this->db->affected_rows() > 0) {
			$row = $q->row();
			return $row;
		}
	}

	public function insertToken($id_pelanggan)
	{
		$token = substr(sha1(rand()), 0, 30);
		$date = date('Y-m-d');

		$string = array(
			'token' => $token,
			'id_pelanggan' => $id_pelanggan,
			'created' => $date
		);
		$query = $this->db->insert_string('tokens', $string);
		$this->db->query($query);
		return $token . $id_pelanggan;
	}

	public function isTokenValid($token)
	{
		$tkn = substr($token, 0, 30);
		$uid = substr($token, 30);

		$q = $this->db->get_where('tokens', array(
			'tokens.token' => $tkn,
			'tokens.id_pelanggan' => $uid
		), 1);

		if ($this->db->affected_rows() > 0) {
			$row = $q->row();

			$created = $row->created;
			$createdTS = strtotime($created);
			$today = date('Y-m-d');
			$todayTS = strtotime($today);

			if ($createdTS != $todayTS) {
				return false;
			}
			$user_info = $this->getUserInfo($row->id_pelanggan);
			return $user_info;
		} else {
			return false;
		}
	}

	public function updatePassword($post)
	{
		$this->db->where('id_pelanggan', $post['id_pelanggan']);
		$this->db->update('pelanggan', array('password' => $post['password']));
		return true;
	}

	//end
}

/* End of file M_pelanggan.php */
