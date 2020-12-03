<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('home');
        }
        
    }



public function registrasi()
	{
        
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run()==false) {
            $data ['title'] = 'UICCI Registrasi';
            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/registrasi');
            $this->load->view('admin/templates/admin_footer');
        } else {

            echo 'data berhasil';
        }

    }

public function index()
	{
        $data['jml_pendaftar'] = $this->db->count_all('daftar_ulang');
       $this->load->view('admin/templates/header');
        $this->load->view('admin/home_admin', $data);
        $this->load->view('admin/templates/footer');

    }

    public function data_pendaftar()
    {
        $data['pendaftar'] = $this->db->get('daftar_ulang')->result_array();

        $data['lokasi'] = $this->db->get('tabel_lokasi')->result_array();

        $this->load->view('admin/templates/header');
        $this->load->view('admin/pendaftar',$data);
        $this->load->view('admin/templates/footer');
    }
    public function delete_pendaftar($id)
    {
        $this->db->delete('daftar_ulang', ['id' => $id]);
        redirect('admin/data_pendaftar');
    }


    public function upload()
	{
        $this->form_validation->set_rules('keterangan','keterangan','required');
        $this->form_validation->set_rules('kategori','kategori','required');
        if ($this->form_validation->run() == false) {
        $data['gambar'] = $this->db->get('upload')->result_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/upload',$data);
        $this->load->view('admin/templates/footer');
        } else {
            $config['allowed_types'] = 'png|jpeg|jpg';
            $config['upload_path'] = './upload/img/';

            $this->load->library('upload',$config);

            $this->upload->do_upload('gambar');
            $gambar = $this->upload->data('file_name');
            $insert = [
                'kategori' => $this->input->post('kategori'),
                'keterangan' => $this->input->post('keterangan'),
                'gambar' => $gambar,
            ];  
            $this->db->insert('upload',$insert);
            $this->session->set_flashdata('flash','<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
            redirect('admin/upload');
        }
        
    }

    public function edit_upload($id_gambar)
	{
        $this->form_validation->set_rules('keterangan','keterangan','required');
        $this->form_validation->set_rules('kategori','kategori','required');
        if ($this->form_validation->run() == false) {
        $data['gambar'] = $this->db->get_where('upload',['id_gambar' => $id_gambar])->row_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/edit_upload',$data);
        $this->load->view('admin/templates/footer');
        } else {
            $config['allowed_types'] = 'png|jpeg|jpg';
            $config['upload_path'] = './upload/img/';

            $this->load->library('upload',$config);

            $this->upload->do_upload('gambar');
            $gambar = $this->upload->data('file_name');
            $update = [
                'kategori' => $this->input->post('kategori'),
                'keterangan' => $this->input->post('keterangan'),
                'gambar' => $gambar,
            ];  
            $this->db->update('upload',$update,['id_gambar' => $id_gambar]);
            $this->session->set_flashdata('flash','<div class="alert alert-success">Data Berhasil Ditambahkan</div>');
            redirect('admin/upload');
        }
        
    }
    
    public function delete_gambar($id)
    {
        $this->db->delete('upload', ['id_gambar' => $id]);
        redirect('admin/upload');
    }

}