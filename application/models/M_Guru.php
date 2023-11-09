<?php
class M_Guru extends CI_Model
{
    public function insert_guru($dataGuru)
    {
        $this->db->insert('guru', $dataGuru);
    }

    public function get_all_guru()
    {
        return $this->db->get('guru')->result();
    }

    public function hapus_guru($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
    }

    public function ubah_guru($id, $dataGuru)
    {
        $this->db->where('id', $id);
        $this->db->update('guru', $dataGuru);
    }

    public function get_user_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('guru')->row();
    }
}
