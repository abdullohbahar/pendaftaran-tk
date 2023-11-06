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
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Guru');
    }

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
        $this->load->model('M_Guru');
        $guru = $this->M_Guru->get_all_guru();
        $data = [
            'active' => 'data-guru',
            'guru' => $guru,
        ];

        $this->load->view('guru/layout/header', $data);
        $this->load->view('guru/layout/navbar', $data);
        $this->load->view('guru/layout/sidebar', $data);
        $this->load->view('guru/data-guru/index', $data);
        $this->load->view('guru/layout/footer', $data);
    }

    public function tambahGuru()
    {
        $dataGuru = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nik' => $this->input->post('nik'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        );

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = ['gif', 'jpg', 'jpeg', 'png', 'PNG', 'WEBP', 'webp'];
        $config['overwrite'] = true;
        $config['max_size'] = 99999999;
        $config['max_width'] = '99999999';
        $config['max_height'] = '99999999';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            $image = $this->upload->data();
            $dataGuru['foto'] = $image['file_name'];
        } else {
            $error = array('error' => $this->upload->display_errors());
            $dataGuru['foto'] = '';
        }


        if ($this->M_Guru->insert_guru($dataGuru)) {
            $this->load->model('M_Guru');
            $guru = $this->M_Guru->get_all_guru();
            $data = [
                'active' => 'data-guru',
                'guru' => $guru,
            ];
            // Data was successfully saved
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect('data-guru');
        } else {
            $this->load->model('M_Guru');
            $guru = $this->M_Guru->get_all_guru();
            $data = [
                'active' => 'data-guru',
                'guru' => $guru,
            ];
            // Data save failed
            $this->session->set_flashdata('failed', 'Data gagal disimpan.');
            redirect('data-guru');
        }
    }

    public function hapusGuru($id)
    {
        $this->load->model('M_Guru');
        $this->M_Guru->hapus_guru($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus.');

        redirect('data-guru');
    }

    public function ubahGuru($id)
    {
        $this->load->model('M_Guru');

        $dataGuru = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'nik' => $this->input->post('nik'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        );

        // Periksa apakah bidang foto tidak kosong
        if (!empty($_FILES['foto']['name'])) {
            // Konfigurasi upload gambar
            $config['upload_path'] = './uploads/'; // Lokasi penyimpanan gambar di server
            $config['allowed_types'] = 'gif|jpg|png'; // Jenis file yang diperbolehkan
            $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $dataGuru['foto'] = $upload_data['file_name'];
            } else {
                $error = $this->upload->display_errors();
                echo "Gagal mengunggah gambar: $error";
                return;
            }
        }

        $this->M_Guru->ubah_guru($id, $dataGuru);
        $this->session->set_flashdata('success', 'Data berhasil diubah.');

        redirect('data-guru');
    }
}
