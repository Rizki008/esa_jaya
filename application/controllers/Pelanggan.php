<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lokasi');
		$this->load->model('m_pelanggan');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('email', 'email', 'required|is_unique[pelanggan.email]', array('required' => '%s Mohon Untuk Diisi!!!', 'is_unique' => '%s Email Sudah Terdaptar'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('no_tlpn', 'No Tlpn', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Registrasi Pelanggan',
				'provinsi' => $this->m_lokasi->provinsi(),
				'isi' => 'frontend/register/v_register'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$email = $this->input->post('email');
			$data = array(
				'id_kabupaten' => $this->input->post('kabupaten'),
				'nama' => $this->input->post('nama'),
				'email' => ($email),
				'password' => $this->input->post('password'),
				'no_tlpn' => $this->input->post('no_tlpn'),
				'alamat' => $this->input->post('alamat'),
				'rol_id' => 2,
				'is_active' => 0,
			);

			//token bilangan rendem
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			];

			$this->m_pelanggan->insert($data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('pesan', 'Registrasi Berhasil,  Silahkan Cek Email Anda Untuk Aktivasi Akun!!!');
			redirect('pelanggan/login');
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'SMTPHost' => 'ssl://smtp.googlemail.com',
			'SMTPUser' => 'kr044401@gmail.com',
			'SMTPPass' => 'yxdlvxnywwnuezwc',
			'SMTPPort' => 465,
			'SMTPCrypto' => 'ssl',
			'mailtype' => 'html',
			'charset' => 'UTF-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);

		$this->email->from('kr044401@gmail.com', 'Esa Jaya');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {
			$this->email->subject('Akun verifikasi');
			$this->email->message('Silahkan Klik disini Untuk Aktifasi Akun : <a 
            href="' . base_url() . 'pelanggan/verify?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Active</a>');
		} elseif ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Silahkan Klik disini Untuk Reset Password Akun Anda : <a 
            href="' . base_url() . 'pelanggan/resetPassword?email=' . $this->input->post('email') . '& token=' . urlencode($token) . '">Reset</a>');
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('pelanggan', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] <  (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('pelanggan');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('pesan', 'Register Berhasil, Silahkan Untuk Login Akun!!!');
					redirect('pelanggan/login');
				} else {

					$this->db->delete('pelanggan', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('pesan', 'Expayer');
					redirect('pelanggan/login');
				}
			} else {
				$this->session->set_flashdata('pesan', 'Register gagal!!!');
				redirect('pelanggan/login');
			}
		} else {
			$this->session->set_flashdata('pesan', 'Data Error !!!');
			redirect('pelanggan/login');
		}
	}

	public function kabupaten()
	{
		$provinsi = $this->input->post('id_provinsi');
		$kabupaten = $this->m_pelanggan->kabupaten($provinsi);
		echo json_encode($kabupaten);
	}
	public function kecamatan()
	{
		$kabupaten = $this->input->post('id_kabupaten');
		$kecamatan = $this->m_pelanggan->kabupaten($kabupaten);
		echo json_encode($kecamatan);
	}
	public function desa()
	{
		$kecamatan = $this->input->post('id_kecamatan');
		$desa = $this->m_pelanggan->kabupaten($kecamatan);
		echo json_encode($desa);
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'email', 'required', array('required' => '%s Mohon Untuk Diisi'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => '%s Mohon Untuk Diisi'));


		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->pelanggan_login->login($email, $password);
		} else {
			$data = array(
				'title' => 'Login Pelanggan',
				'isi' => 'frontend/login/v_login'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		}
	}

	public function logout()
	{
		$this->pelanggan_login->logout();
	}

	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Forgot Password',
				'isi' => 'frontend/login/v_forgot'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$email = $this->input->post('email');
			$pelanggan = $this->db->get_where('pelanggan', ['email' => $email, 'is_active' => 1])->row_array();

			if ($pelanggan) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('pesan', 'Mohon Cek Email anda untuk Reset Password');
				redirect('pelanggan/login');
			} else {
				$this->session->set_flashdata('pesan', 'Email Tidak Terdaftar Atau Belum Aktivasi Akun');
				redirect('pelanggan/forgotPassword');
			}
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$pelanggan = $this->db->get_where('pelanggan', ['email' => $email])->row_array();

		if ($pelanggan) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('pesan', 'Reset Password Faild Wrong Token');
				redirect('pelanggan/login');
			}
		} else {
			$this->session->set_flashdata('pesan', 'Reset Password Faild Wrong Email');
			redirect('pelanggan/login');
		}
	}

	public function changePassword()
	{

		if (!$this->session->userdata('reset_email')) {
			redirect('pelanggan/login');
		}

		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[7]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|min_length[7]|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Password Baru Password',
				'isi' => 'frontend/login/v_changepass'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$password = $this->input->post('password1');
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('pelanggan');

			$this->session->unset_userdata('reset_email');
			$this->session->set_flashdata('pesan', 'Reset Password Faild Wrong Email');
			redirect('pelanggan/login');
		}
	}
}
