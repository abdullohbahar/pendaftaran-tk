<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Masukan extends CI_Model
{
    public function get_all_masukan()
    {
        return $this->db->get('masukan')->result();
    }

    public function simpan_masukan($data)
    {
        $this->db->insert('masukan', $data);
        // Gantilah 'nama_tabel' dengan nama tabel sesuai dengan struktur database Anda
    }
}
