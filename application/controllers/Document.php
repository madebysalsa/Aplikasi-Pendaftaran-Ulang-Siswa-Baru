
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf_report');
    }

    public function index()
    {
        if ($this->input->post('nisn')) {
            $nisn = $this->input->post('nisn');
        } else {
            $nisn = $this->uri->segment(3);
        }
        $this->db->join('pembayaran','pembayaran.nisn=daftar_ulang.nisn_santri','left');
        $data['pendaftar'] = $this->db->get_where('daftar_ulang',['daftar_ulang.nisn_santri' => $nisn])->row_array();
        if (!$data['pendaftar']) {
            $this->session->set_flashdata('flash','<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('home/index');
        } else {
            $this->load->view('laporan/salsa', $data);
        }
        
    }

    public function cetak_lokasi()
    {
        $lokasi = $this->input->post('lokasi');
        $this->db->join('pembayaran','pembayaran.nisn=daftar_ulang.nisn_santri','left');
        $data['pendaftar'] = $this->db->get_where('daftar_ulang',['pembayaran.yts_cabang' => $lokasi])->result_array();
        $data['lokasi_yts'] =$this->input->post('lokasi');
        $this->load->view('laporan/laporan_lokasi', $data);
        
    }
}
