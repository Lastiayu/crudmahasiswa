<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lomba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lomba_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Peserta Lomba";
        $data['lomba'] = $this->Lomba_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("lomba/vw_lomba", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Peserta";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Peserta', 'required', [
            'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Jurusan Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_lomba', 'Jenis Perlombaan', 'required', [
            'required' => 'Jenis lomba Wajib di isi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah ', 'required', [
            'required' => 'Asal sekolah Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required', [
            'required' => 'NO HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('asal_kota', 'Asal Kota', 'required', [
            'required' => 'Asal kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('sosial_media', 'Sosial Media', 'required', [
            'required' => 'Sosial media Wajib di isi'
        ]);
        $this->form_validation->set_rules('share', ' Bukti Share', 'required', [
            'required' => 'Bukti Share Wajib di isi'
        ]);
        $this->form_validation->set_rules('follow', ' Bukti Follow', 'required', [
            'required' => 'Bukti Follow Wajib di upload'
        ]);
        $this->form_validation->set_rules('ktm', 'KTM', 'required', [
            'required' => 'Scan KTM Wajib di upload'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("lomba/vw_tambah_lomba", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email'),
                'jenis_lomba' => $this->input->post('jenis_lomba'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'no_telp' => $this->input->post('no_telp'),
                'asal_kota' => $this->input->post('asal_kota'),
                'sosial_media' => $this->input->post('sosial_media'),
            ];
            $upload_image1 = $_FILES['share']['name'];
            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/production/images/lomba/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('share')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('share', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image2 = $_FILES['follow']['name'];
            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/production/images/lomba/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('follow')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('follow', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image3 = $_FILES['ktm']['name'];
            if ($upload_image3) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/production/images/lomba/';
                $this->load->library('ktm', $config);
                if ($this->upload->do_upload('ktm')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('ktm', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Lomba_model->insert($data, $upload_image1, $upload_image2, $upload_image3);
            $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Data Peserta Berhasil Ditambah!</div>');
            redirect('Lomba');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Peserta";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lomba'] = $this->Lomba_model->getById($id);

        $this->form_validation->set_rules('nama', 'Nama Peserta', 'required', [
            'required' => 'Nama Prodi Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Jurusan Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_lomba', 'Jenis Perlombaan', 'required', [
            'required' => 'Jenis lomba Wajib di isi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah ', 'required', [
            'required' => 'Asal sekolah Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required', [
            'required' => 'NO HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('asal_kota', 'Asal Kota', 'required', [
            'required' => 'Asal kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('sosial_media', 'Sosial Media', 'required', [
            'required' => 'Sosial media Wajib di isi'
        ]);
        $this->form_validation->set_rules('share', ' Bukti Share', 'required', [
            'required' => 'Bukti Share Wajib di isi'
        ]);
        $this->form_validation->set_rules('follow', ' Bukti Follow', 'required', [
            'required' => 'Bukti Follow Wajib di upload'
        ]);
        $this->form_validation->set_rules('ktm', 'KTM', 'required', [
            'required' => 'Scan KTM Wajib di upload'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("lomba/vw_ubah_lomba", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email'),
                'jenis_lomba' => $this->input->post('jenis_lomba'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'no_telp' => $this->input->post('no_telp'),
                'asal_kota' => $this->input->post('asal_kota'),
                'sosial_media' => $this->input->post('sosial_media'),
            ];
            $upload_image1 = $_FILES['share']['name'];
            if ($upload_image1) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/production/images/lomba/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('share')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('share', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image2 = $_FILES['follow']['name'];
            if ($upload_image2) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/production/images/lomba/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('follow')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('follow', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $upload_image3 = $_FILES['ktm']['name'];
            if ($upload_image3) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/production/images/lomba/';
                $this->load->library('ktm', $config);
                if ($this->upload->do_upload('ktm')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('ktm', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Lomba_model->insert($data, $upload_image1, $upload_image2, $upload_image3);
            $this->session->set_flashdata('message', '<div class = "alert alert-success" role="alert">Data Peserta Berhasil Diubah!</div>');
            redirect('Lomba');
        }
    }
    public function hapus($id)
    {
        $this->Lomba_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
        Peserta Berhasil Di hapus!</div>');
        redirect('Lomba');
    }
}