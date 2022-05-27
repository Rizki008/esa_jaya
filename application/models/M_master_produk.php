<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_master_produk extends CI_Model
{
    //proses kategori//
    public function kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('id_kategori', 'desc');
        return $this->db->get()->result();
    }
    public function add_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }
    public function detail_edit($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id_kategori);
        return $this->db->get()->row();
    }
    public function update_kategori($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('kategori', $data);
    }
    public function delete_kategori($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->delete('kategori');
    }

    //produk
    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $this->db->order_by('id_produk', 'desc');
        return $this->db->get()->result();
    }
    public function add_produk($data)
    {
        $this->db->insert('produk', $data);
    }
    public function detail_edit_produk($id_produk)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->row();
    }
    public function update_produk($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update('produk', $data);
    }
    public function delete_produk($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->delete('produk');
    }

    //menampilkan id tertinggi
    public function id_produk()
    {
        return $this->db->query('SELECT max(id_produk) as id FROM produk')->row();
    }
    //diskon
    public function diskon()
    {
        $this->db->select('*');
        $this->db->from('diskon');
        $this->db->join('produk', 'diskon.id_produk = produk.id_produk', 'left');
        $this->db->order_by('id_diskon', 'desc');
        return $this->db->get()->result();
    }
    public function add_diskon($data)
    {
        $this->db->insert('diskon', $data);
    }
    public function detail_edit_diskon($id_diskon)
    {
        $this->db->select('*');
        $this->db->from('diskon');
        $this->db->join('produk', 'diskon.id_produk = produk.id_produk', 'left');
        $this->db->where('id_diskon', $id_diskon);
        return $this->db->get()->row();
    }
    public function update_diskon($data)
    {
        $this->db->where('id_diskon', $data['id_diskon']);
        $this->db->update('diskon', $data);
    }
    public function delete_diskon($data)
    {
        $this->db->where('id_diskon', $data['id_diskon']);
        $this->db->delete('diskon');
    }
    public function delete_diskon_all($data)
    {
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->delete('diskon');
    }

    //gambar
    public function gambar()
    {
        $this->db->select('produk.*,COUNT(gambar.id_gambar)as total_gambar');
        $this->db->select('gambar.img');
        $this->db->from('produk');
        $this->db->join('gambar', 'produk.id_produk = gambar.id_produk', 'left');
        $this->db->group_by('produk.id_produk');
        $this->db->order_by('produk.id_produk', 'desc');
        return $this->db->get()->result();
    }
    public function detail($id_gambar)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('id_gambar', $id_gambar);
        return $this->db->get()->row();
    }
    public function detail_gambar($id_produk)
    {
        $this->db->select('*');
        $this->db->from('gambar');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get()->result();
    }
    public function add_gambar($data)
    {
        $this->db->insert('gambar', $data);
    }
    public function delete_gambar($data)
    {
        $this->db->where('id_gambar', $data['id_gambar']);
        $this->db->delete('gambar');
    }
}
