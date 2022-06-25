<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lokasi');
		$this->load->model('m_ongkir');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Lokasi',
			'provinsi' => $this->m_lokasi->provinsi(),
			'kabupaten' => $this->m_lokasi->kabupaten(),
			'lokasi' => $this->m_ongkir->lokasi(),
			'isi' => 'backend/lokasi/v_lokasi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'provinsi' => $this->input->post('provinsi'),
		);
		$this->m_lokasi->add_provinsi($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
		redirect('lokasi');
	}

	//Update one item
	public function update($id_provinsi = NULL)
	{
		$data = array(
			'id_provinsi' => $id_provinsi,
			'provinsi' => $this->input->post('provinsi'),
		);
		$this->m_lokasi->edit_provinsi($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
		redirect('lokasi');
	}

	//Delete one item
	public function delete($id_provinsi = NULL)
	{
		$data = array(
			'id_provinsi' => $id_provinsi,
		);
		$this->m_lokasi->delete_provinsi($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('lokasi');
	}

	public function add_kabupaten()
	{
		$this->form_validation->set_rules('kabupaten', 'Nama Kabupaten', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
		$this->form_validation->set_rules('id_provinsi', 'Nama Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'provinsi' => $this->m_lokasi->kabupaten(),
			);
		} else {
			$data = array(
				'kabupaten' => $this->input->post('kabupaten'),
				'id_provinsi' => $this->input->post('id_provinsi'),
			);
			$this->m_lokasi->add_kabupaten($data);
			$this->session->set_flashdata('pesan', 'kabupaten Berhasil Ditambahkan!!!');
			redirect('lokasi');
		}
	}
	public function update_kabupaten($id_kabupaten = NULL)
	{

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'provinsi' => $this->m_lokasi->provinsi(),
			);
		} else {
			$data = array(
				'id_kabupaten' => $id_kabupaten,
				'id_provinsi' => $this->input->post('id_provinsi'),
				'kabupaten' => $this->input->post('kabupaten'),
			);
			$this->m_lokasi->edit_kabupaten($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diupdate');
			redirect('lokasi');
		}
	}

	public function delete_kabupaten($id_kabupaten = NULL)
	{
		$data = array(
			'id_kabupaten' => $id_kabupaten
		);
		$this->m_lokasi->delete_kabupaten($data);
		$this->session->set_flashdata('pesan', 'kabupaten Berhasil Didelet!!!');
		redirect('lokasi');
	}

	//ongkir
	public function add_ongkir()
	{
		$this->form_validation->set_rules('nama_lokasi', 'Nama Lokasi', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('ongkir', 'Ongkir', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

		$data = array(
			'nama_lokasi' => $this->input->post('nama_lokasi'),
			'ongkir' => $this->input->post('ongkir')
		);
		$this->m_ongkir->add($data);
		$this->session->set_flashdata('pesan', 'Lokasi Berhasil Ditambahkan!!!');
		redirect('lokasi');
	}

	public function edit($id_lokasi = NULL)
	{
		$data = array(
			'id_lokasi' => $id_lokasi,
			'nama_lokasi' => $this->input->post('nama_lokasi'),
			'ongkir' => $this->input->post('ongkir')
		);
		$this->m_ongkir->edit($data);
		$this->session->set_flashdata('pesan', 'Lokasi Berhasil Diedit!!!');
		redirect('lokasi');
	}

	//Delete one item
	public function delete_ongkir($id_lokasi = NULL)
	{
		$data = array(
			'id_lokasi' => $id_lokasi
		);
		$this->m_ongkir->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('lokasi');
	}
}

/* End of file Lokasi.php */
