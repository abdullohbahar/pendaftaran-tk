<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasukanController extends CI_Controller
{

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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Masukan');
    }

    public function kirim()
    {
        $masukan = $this->input->post('masukan');

        $data = array(
            'masukan' => $masukan,
        );

        $this->M_Masukan->simpan_masukan($data);

        $this->session->set_flashdata('success', 'Berhasil Memberi Masukan.');

        redirect('#masukan');
    }
}
