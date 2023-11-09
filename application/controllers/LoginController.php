<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
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
        $this->load->library('session');
        $this->load->model('M_Guru');
    }

    public function index()
    {
        $this->load->library('form_validation');

        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        $this->load->view('login/index');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->M_Guru->get_user_by_username($username);

        if ($user && password_verify($password, $user->password)) {
            // Login sukses
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username);

            redirect('dashboard'); // Ganti dengan URL halaman beranda
        } else {
            // Login gagal
            $this->session->set_flashdata('error', 'Username atau password salah.');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
