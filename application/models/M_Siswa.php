<?php
class M_siswa extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save_siswa($data)
    {
        // Insert data into the "siswa" table
        $this->db->insert('siswa', $data);

        // Check if the insertion was successful
        return $this->db->affected_rows() > 0;
    }

    public function get_last_id()
    {
        $this->db->select_max('id');
        $result = $this->db->get('siswa')->row();
        return $result->id;
    }

    public function get_pendaftaran()
    {
        $this->db->select('siswa.*, wali_siswa.*');
        $this->db->from('siswa');
        $this->db->join('wali_siswa', 'siswa.id = wali_siswa.siswa_id');
        $this->db->where('status_penerimaan', 'pending');
        return $this->db->get()->result();
    }

    public function get_siswa_diterima()
    {
        $this->db->select('siswa.*, wali_siswa.*');
        $this->db->from('siswa');
        $this->db->join('wali_siswa', 'siswa.id = wali_siswa.siswa_id');
        $this->db->where('status_penerimaan', 'diterima');
        return $this->db->get()->result();
    }

    public function get_siswa_ditolak()
    {
        $this->db->select('siswa.*, wali_siswa.*');
        $this->db->from('siswa');
        $this->db->join('wali_siswa', 'siswa.id = wali_siswa.siswa_id');
        $this->db->where('status_penerimaan', 'ditolak');
        return $this->db->get()->result();
    }

    public function terima_siswa($id)
    {
        $data = array('status_penerimaan' => 'diterima');
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);
    }

    public function tolak_siswa($id)
    {
        $data = array('status_penerimaan' => 'ditolak');
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);
    }
}
