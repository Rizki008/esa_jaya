<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Master_produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_master_produk');
    }

    public function kategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Kategori Produk',
                'kategori' => $this->m_master_produk->kategori(),
                'isi' => 'backend/kategori/v_kategori'
            );
            $this->load->view('backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_kategori' => $this->input->post('nama_kategori'),
            );
            $this->m_master_produk->add_kategori($data);
            $this->session->set_flashdata('pesan', 'Kategori Produk Berhasil Ditambahkan');
            redirect('master_produk/kategori');
        }
    }
    public function edit_kategori($id_kategori = null)
    {
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->input->post('nama_kategori'),
        );
        $this->m_master_produk->update_kategori($data);
        $this->session->set_flashdata('pesan', 'Kategori Berhasil Diupdate!!!');
        redirect('master_produk/kategori');
    }
    public function delete_kategori($id_kategori = null)
    {
        $data = array(
            'id_kategori' => $id_kategori,
        );
        $this->m_master_produk->delete_kategori($data);
        $this->session->set_flashdata('pesan', 'Kategori Berhasil Dihapus!!!');
        redirect('master_produk/kategori');
    }

    //produk
    public function produk()
    {
        $data = array(
            'title' => 'Data Produk',
            'produk' => $this->m_master_produk->produk(),
            'isi' => 'backend/produk/v_produk'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function add_produk()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('stock', 'Stock Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('berat', 'Berat Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './uploads/produk';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']  = '5000';
            $this->upload->initialize($config);
            $field_name = "gambar";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah Produk',
                    'kategori' => $this->m_master_produk->kategori(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'backend/produk/v_add'
                );
                $this->load->view('backend/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/produk/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'nama_produk' => $this->input->post('nama_produk'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'harga' => $this->input->post('harga'),
                    'stock' => $this->input->post('stock'),
                    'promo' => $this->input->post('promo'),
                    'berat' => $this->input->post('berat'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $upload_data['uploads']['file_name']
                );
                $this->m_master_produk->add_produk($data);

                //menambahkan ke data diskon otomatis
                $id = $this->m_master_produk->id_produk();
                $z = $id->id;
                $diskon = array(
                    'id_produk' => $z,
                    'nama_diskon' => 0,
                    'diskon' => 0
                );
                $this->m_master_produk->add_diskon($diskon);
                $this->session->set_flashdata('pesan', 'Produk Berhasil Ditambahkan!!!');
                redirect('master_produk/produk');
            }
        }
        $data = array(
            'title' => 'Tambah Produk',
            'kategori' => $this->m_master_produk->kategori(),
            'isi' => 'backend/produk/v_add'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function edit_produk($id_produk = null)
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('stock', 'Stock Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('berat', 'Berat Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './uploads/produk';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']  = '5000';
            $this->upload->initialize($config);
            $field_name = "gambar";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit Produk',
                    'kategori' => $this->m_master_produk->kategori(),
                    'produk' => $this->m_master_produk->detail_edit_produk($id_produk),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'backend/produk/v_edit'
                );
                $this->load->view('backend/v_wrapper', $data, FALSE);
            } else {
                //hapus gambar dari folder
                $produk = $this->m_master_produk->detail_edit_produk($id_produk);
                if ($produk->gambar !== "") {
                    unlink('./uploads/produk/' . $produk->gambar);
                }
                //end

                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/produk/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_produk' => $id_produk,
                    'nama_produk' => $this->input->post('nama_produk'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'harga' => $this->input->post('harga'),
                    'stock' => $this->input->post('stock'),
                    'promo' => $this->input->post('promo'),
                    'berat' => $this->input->post('berat'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'gambar' => $upload_data['uploads']['file_name']
                );
                $this->m_master_produk->update_produk($data);
                $this->session->set_flashdata('pesan', 'Produk Berhasil Ditambahkan!!!');
                redirect('master_produk/produk');
            }
            //tanpa hapus gambar
            $data = array(
                'id_produk' => $id_produk,
                'nama_produk' => $this->input->post('nama_produk'),
                'id_kategori' => $this->input->post('id_kategori'),
                'harga' => $this->input->post('harga'),
                'stock' => $this->input->post('stock'),
                'promo' => $this->input->post('promo'),
                'berat' => $this->input->post('berat'),
                'deskripsi' => $this->input->post('deskripsi'),
            );
            $this->m_master_produk->update_produk($data);
            $this->session->set_flashdata('pesan', 'Produk Berhasil Ditambahkan!!!');
            redirect('master_produk/produk');
        }
        $data = array(
            'title' => 'Tambah Produk',
            'kategori' => $this->m_master_produk->kategori(),
            'produk' => $this->m_master_produk->detail_edit_produk($id_produk),
            'isi' => 'backend/produk/v_edit'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function delete_produk($id_produk = null)
    {
        $produk = $this->m_master_produk->detail_edit_produk($id_produk);
        if ($produk->gambar !== "") {
            unlink('./uploads/produk/' . $produk->gambar);
        }
        $data = array(
            'id_produk' => $id_produk,
        );
        $this->m_master_produk->delete_produk($data);
        $this->m_master_produk->delete_diskon_all($data);
        $this->session->set_flashdata('pesan', 'Produk Berhasil Dihapus');
        redirect('master_produk/produk');
    }

    //diskon
    public function diskon()
    {
        $data = array(
            'title' => 'Diskon Produk',
            'diskon' => $this->m_master_produk->diskon(),
            'isi' => 'backend/diskon/v_diskon'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function edit_diskon($id_diskon = null)
    {
        $data = array(
            'id_diskon' => $id_diskon,
            'nama_diskon' => $this->input->post('nama_diskon'),
            'diskon' => $this->input->post('diskon'),
        );
        $this->m_master_produk->update_diskon($data);
        $this->session->set_flashdata('pesan', 'diskon Berhasil Diupdate!!!');
        redirect('master_produk/diskon');
    }
    public function delete_diskon($id_diskon = null)
    {
        $data = array(
            'id_diskon' => $id_diskon,
        );
        $this->m_master_produk->delete_diskon($data);
        $this->session->set_flashdata('pesan', 'diskon Berhasil Dihapus!!!');
        redirect('master_produk/diskon');
    }

    //gambar
    public function gambar()
    {
        $data = array(
            'title' => 'Data Gambar Produk',
            'gambar' => $this->m_master_produk->gambar(),
            'isi' => 'backend/gambar/v_gambar'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function add_gambar($id_produk)
    {
        $this->form_validation->set_rules('keterangan', 'Keterangan Gambar', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './uploads/gambar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']  = '5000';
            $this->upload->initialize($config);
            $field_name = "img";

            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Tambah Gambar',
                    'produk' => $this->m_master_produk->detail_edit_produk($id_produk),
                    'gambar' => $this->m_master_produk->detail_gambar($id_produk),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'backend/gambar/v_add'
                );
                $this->load->view('backend/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_produk' => $id_produk,
                    'keterangan' => $this->input->post('keterangan'),
                    'img' => $upload_data['uploads']['file_name']
                );
                $this->m_master_produk->add_gambar($data);
                $this->session->set_flashdata('pesan', 'Gambar Berhasil Ditambahkan!!!');
                redirect('master_produk/add_gambar/' . $id_produk);
            }
        }
        $data = array(
            'title' => 'Tambah Gambar',
            'produk' => $this->m_master_produk->detail_edit_produk($id_produk),
            'gambar' => $this->m_master_produk->detail_gambar($id_produk),
            'isi' => 'backend/gambar/v_add'
        );
        $this->load->view('backend/v_wrapper', $data, FALSE);
    }
    public function delete_gambar($id_produk, $id_gambar)
    {
        $gambar = $this->m_master_produk->detail($id_gambar);
        if ($gambar->gambar !== "") {
            unlink('./assets/gambar/' . $gambar->gambar);
        }

        $data = array(
            'id_gambar' => $id_gambar,
        );
        $this->m_master_produk->delete_gambar($data);
        $this->session->set_flashdata('pesan', 'Gambar Berhasil Dihapus');
        redirect('master_produk/add_gambar/' . $id_produk);
    }

    //diskon belanja besar
    // public function diskon_besar()
    // {
    //     $data = array(
    //         'title' => 'Diskon Produk',
    //         'diskon_besar' => $this->m_master_produk->diskon_nesar(),
    //         'isi' => 'backend/diskonbelanja/v_diskon'
    //     );
    //     $this->load->view('backend/v_wrapper', $data, FALSE);
    // }
    public function diskon_besar()
    {
        $this->form_validation->set_rules('besar_diskon', 'Nama Kategori', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Diskon Produk',
                'diskon_besar' => $this->m_master_produk->diskon_besar(),
                'isi' => 'backend/diskonbelanja/v_diskon'
            );
            $this->load->view('backend/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'besar_diskon' => $this->input->post('besar_diskon'),
            );
            $this->m_master_produk->add_diskon_besar($data);
            $this->session->set_flashdata('pesan', 'Diskon Belanja Besar Berhasil Ditambahkan');
            redirect('master_produk/diskon_besar');
        }
    }
    public function edit_diskon_besar($id_diskon_belanja = null)
    {
        $data = array(
            'id_diskon_belanja' => $id_diskon_belanja,
            'besar_diskon' => $this->input->post('besar_diskon'),
        );
        $this->m_master_produk->update_diskon_besar($data);
        $this->session->set_flashdata('pesan', 'diskon Berhasil Diupdate!!!');
        redirect('master_produk/diskon_besar');
    }
    public function delete_diskon_besar($id_diskon_belanja = null)
    {
        $data = array(
            'id_diskon_belanja' => $id_diskon_belanja,
        );
        $this->m_master_produk->delete_diskon_besar($data);
        $this->session->set_flashdata('pesan', 'diskon Berhasil Dihapus!!!');
        redirect('master_produk/diskon_besar');
    }
}
