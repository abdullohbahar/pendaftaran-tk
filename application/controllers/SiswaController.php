<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiswaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        // Cek apakah pengguna sudah masuk
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); // Redirect pengguna ke halaman login jika belum masuk
        }
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function siswaDitolak()
    {
        $this->load->model('M_Siswa');
        $ditolak = $this->M_Siswa->get_siswa_ditolak();

        $data = [
            'active' => 'data-ditolak',
            'ditolak' => $ditolak,
        ];

        $this->load->view('guru/layout/header', $data);
        $this->load->view('guru/layout/navbar', $data);
        $this->load->view('guru/layout/sidebar', $data);
        $this->load->view('siswa/siswa-ditolak', $data);
        $this->load->view('guru/layout/footer', $data);
    }

    public function siswaAktif()
    {
        $this->load->model('M_Siswa');
        $aktif = $this->M_Siswa->get_siswa_diterima();

        $data = [
            'active' => 'data-aktif',
            'aktif' => $aktif,
        ];

        $this->load->view('guru/layout/header', $data);
        $this->load->view('guru/layout/navbar', $data);
        $this->load->view('guru/layout/sidebar', $data);
        $this->load->view('siswa/siswa-aktif', $data);
        $this->load->view('guru/layout/footer', $data);
    }
}
