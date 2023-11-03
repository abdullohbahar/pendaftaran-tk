<?php
class M_Wali extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save_wali($data)
    {
        // Insert data into the "siswa" table
        $this->db->insert('wali_siswa', $data);

        // Check if the insertion was successful
        return $this->db->affected_rows() > 0;
    }
}
