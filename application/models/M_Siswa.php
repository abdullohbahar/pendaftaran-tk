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
}
