<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capres extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Capres_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Calon Presiden";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['capres'] = $this->Capres_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("capres/vw_capres", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Capres";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("capres/vw_tambah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function update()
    {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'Nama' => $this->input->post('Nama'),
            'Asal' => $this->input->post('Asal'),
            'Partai' => $this->input->post('Partai'),
            'Pekerjaan' => $this->input->post('Pekerjaan'),
            'Umur' => $this->input->post('Umur'),
        ];
        $id = $this->input->post('id');
        $this->Capres_model->update(['id' => $id], $data);
        redirect('Capres');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Capres";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['capres'] = $this->Capres_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("capres/vw_ubah_capres", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->Capres_model->delete($id);
        redirect('Capres');
    }

    public function upload()
    {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'Nama' => $this->input->post('Nama'),
            'Asal' => $this->input->post('Asal'),
            'Partai' => $this->input->post('Partai'),
            'Pekerjaan' => $this->input->post('Pekerjaan'),
            'Umur' => $this->input->post('Umur'),
        ];
        $this->Capres_model->insert($data);
        redirect('Capres');
    }
}