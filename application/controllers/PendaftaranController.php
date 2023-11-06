<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PendaftaranController extends CI_Controller
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
        $this->load->library('form_validation');

        $this->load->view('pendaftaran/index');
    }

    public function simpanPendaftaran()
    {
        $this->load->library('form_validation');

        $yearNow = date('Y');
        $nextYear = date('Y') + 1;

        // $this->form_validation->set_rules('foto', 'Foto', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('anak_keberapa', 'Anak Keberapa', 'required');
        $this->form_validation->set_rules('jumlah_saudara', 'Jumlah Saudara', 'required');
        $this->form_validation->set_rules('status_anak', 'Status Anak', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
        $this->form_validation->set_rules('tempat_lahir_wali', 'Tempat Lahir Wali', 'required');
        $this->form_validation->set_rules('tanggal_lahir_wali', 'Tanggal Lahir Wali', 'required');
        $this->form_validation->set_rules('alamat_wali', 'Alamat Wali', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan Wali', 'required');
        $this->form_validation->set_rules('no_telpon', 'No Telepon Wali', 'required');
        $this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        $this->form_validation->set_message('required', 'Kolom %s Harus diisi.');

        if ($this->form_validation->run() === false) {
            $this->load->view('pendaftaran/index');
        } else {
            $this->load->model('M_Siswa');
            $this->load->model('M_Wali');

            // Dapatkan ID terakhir yang ada di tabel siswa
            $last_id = $this->M_Siswa->get_last_id();

            // Buat ID baru dengan menambahkan 1 ke ID terakhir
            $new_id = intval($last_id) + 1;

            // Dapatkan tahun sekarang
            $yearNow = date('Y');

            // Tahun berikutnya
            $nextYear = $yearNow + 1;

            // Format ID sesuai dengan kebutuhan
            $id = sprintf('%02d/%d/%d', $new_id, $yearNow, $nextYear);

            $dataSiswa = array(
                'id' => $id,
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'agama' => $this->input->post('agama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'anak_keberapa' => $this->input->post('anak_keberapa'),
                'jumlah_saudara' => $this->input->post('jumlah_saudara'),
                'status_anak' => $this->input->post('status_anak'),
                'alamat' => $this->input->post('alamat'),
                'tahun_ajaran' => $yearNow . '/' . $nextYear,
            );

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|PNG';
            $config['overwrite'] = true;
            $config['max_size'] = 10000;
            $config['max_width'] = '10000';
            $config['max_height'] = '10000';
            $config['file_name'] = 'img' . time();

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $image = $this->upload->data();
                $dataSiswa['foto'] = $image['file_name'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                $dataSiswa['foto'] = '';
            }

            $dataWali = array(
                'nama' => $this->input->post('nama_wali'),
                'tempat_lahir' => $this->input->post('tempat_lahir_wali'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir_wali'),
                'alamat' => $this->input->post('alamat_wali'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'no_telpon' => $this->input->post('no_telpon'),
                'penghasilan' => $this->input->post('penghasilan'),
                'status' => $this->input->post('status'),
            );

            if ($this->M_Siswa->save_siswa($dataSiswa) && $this->M_Wali->save_wali($dataWali)) {
                // Data was successfully saved
                $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                $this->load->view('pendaftaran/index');
            } else {
                // Data save failed
                $this->session->set_flashdata('failed', 'Data berhasil disimpan.');
                $this->load->view('pendaftaran/index');
            }
        }
    }
}
