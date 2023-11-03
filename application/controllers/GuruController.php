<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GuruController extends CI_Controller
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
    public function index()
    {
        $data = [
            'active' => 'dashboard'
        ];

        $this->load->view('guru/layout/header', $data);
        $this->load->view('guru/layout/navbar', $data);
        $this->load->view('guru/layout/sidebar', $data);
        $this->load->view('guru/dashboard/index', $data);
        $this->load->view('guru/layout/footer', $data);
    }

    public function dataGuru()
    {
        $data = [
            'active' => 'data-guru'
        ];

        $this->load->view('guru/layout/header', $data);
        $this->load->view('guru/layout/navbar', $data);
        $this->load->view('guru/layout/sidebar', $data);
        $this->load->view('guru/data-guru/index', $data);
        $this->load->view('guru/layout/footer', $data);
    }
}