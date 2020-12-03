<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
    public function perjanjian($nisn)
	{
        $this->db->join('pembayaran','pembayaran.nisn=daftar_ulang.nisn_santri','left');
        $data['pendaftar'] = $this->db->get_where('daftar_ulang',['daftar_ulang.nisn_santri' => $nisn])->row_array();
        $this->load->view('templates/header');
        $this->load->view('home/perjanjian',$data);
        $this->load->view('templates/footer');
    }
    
    public function tatatertib()
	{
        $this->load->view('templates/header');
        $this->load->view('home/tatatertib');
        $this->load->view('templates/footer');
    }
    public function jawa()
	{
        $this->session->unset_userdata('lokasi');
        $this->session->sess_destroy();

        $data['lokasi'] = $this->db->get_where('provinsi',['pulau' => 'jawa'])->result_array();
        $this->load->view('templates/header');
        $this->load->view('home/jawa',$data);
        $this->load->view('templates/footer');
    }
    public function kalimantan()
	{
        $this->session->unset_userdata('lokasi');
        $this->session->sess_destroy();
        $data['lokasi'] = $this->db->get_where('provinsi',['pulau' => 'kalimantan'])->result_array();
        $this->load->view('templates/header');
        $this->load->view('home/kalimantan', $data);
        $this->load->view('templates/footer');
    }
    public function sumatera()
	{
        $this->session->unset_userdata('lokasi');
        $this->session->sess_destroy();
        $data['lokasi'] = $this->db->get_where('provinsi',['pulau' => 'sumatera'])->result_array();
        $this->load->view('templates/header');
        $this->load->view('home/sumatera', $data);
        $this->load->view('templates/footer');
    }
    public function sulawesi()
	{
        $this->session->unset_userdata('lokasi');
        $this->session->sess_destroy();
        $data['lokasi'] = $this->db->get_where('provinsi',['pulau' => 'sulawesi'])->result_array();
        $this->load->view('templates/header');
        $this->load->view('home/sulawesi', $data);
        $this->load->view('templates/footer');
    }
    public function nusateng()
	{
        $this->session->unset_userdata('lokasi');
        $this->session->sess_destroy();
        $data['lokasi'] = $this->db->get_where('provinsi',['pulau' => 'nusatenggara'])->result_array();
        $this->load->view('templates/header');
        $this->load->view('home/nusateng', $data);
        $this->load->view('templates/footer');
    }
    public function daftarsantri()
	{
        
        $this->load->view('templates/header');
        $this->load->view('home/daftarsantri');
        $this->load->view('templates/footer');
    }
    public function surat_pemberitahuan()
	{
        $this->load->view('templates/header');
        $this->load->view('home/surat_pemberitahuan');
        $this->load->view('templates/footer');
    }
    public function hal_hal()
	{
        $this->load->view('templates/header');
        $this->load->view('home/hal_hal');
        $this->load->view('templates/footer');
    }
    public function galeri()
	{
        $data['gambar'] = $this->db->get('upload')->result_array();
        $this->load->view('templates/header');
        $this->load->view('home/galeri',$data);
        $this->load->view('templates/footer');
    }
    public function daftarulang()
	{
        $lokasi = $this->input->post('lokasi');
        $this->session->set_userdata([
            'lokasi' => $lokasi
        ]);
        $this->load->view('templates/header');
        $this->load->view('home/daftarulang');
        $this->load->view('templates/footer');
    }
    
    public function daftar_ulang(){
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('lulusan','Lulusan','required');
        $this->form_validation->set_rules('no_telp','no_telp','required');
        $this->form_validation->set_rules('nik','Nik','required');
        $this->form_validation->set_rules('nisn','nisn','required|is_unique[daftar_ulang.nisn_santri]');
        $this->form_validation->set_rules('infaq','Infaq','required');
        // insert ke tabel daftar_ulang
        if ($this->form_validation->run()==false) {
            $this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Data anda salah</div>');
             $this->load->view('templates/header');
             $this->load->view('home/daftarulang');
             $this->load->view('templates/footer');
            } else {
            $insert = [
                'nama' => $this->input->post('nama'),
                'lulusan'  => $this->input->post('lulusan'),
                'no_telp' => $this->input->post('no_telp'),
                'nik' => $this->input->post('nik'),
                'nisn_santri' => $this->input->post('nisn'),
                'uk_baju' => $this->input->post('baju'),
                'uk_celana' => $this->input->post('celana'),
                'uk_kopiyah' => $this->input->post('take'),
                'infaq' => $this->input->post('infaq'),
            ];
            $this->db->insert('daftar_ulang',$insert);
            redirect('home/pembayaran/'.$this->input->post('nisn'));
        }
        
    }

    public function pembayaran($nisn)
    {


        $this->form_validation->set_rules('nama_ortu','Nama_ortu','required');
        $this->form_validation->set_rules('alamat_rumah','Alamat_rumah','required');
        $this->form_validation->set_rules('no_hp','No_hp','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        $this->form_validation->set_rules('alamat_kantor','Alamat_kantor','required');
        $this->form_validation->set_rules('nisn','NISN','required');
        //$this->form_validation->set_rules('yts_cabang','Yts_cabang','required');
        $this->form_validation->set_rules('kelas_santri','Kelas_santri','required');
        // insert ke tabel daftar_ulang
        if ($this->form_validation->run()==false) {
            $this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Data anda salah</div>');
            $data['lokasi'] = $this->db->get_where('tabel_lokasi',['provinsi' => $this->session->userdata('lokasi')])->result_array();
            $data['pendaftar'] = $this->db->get_where('daftar_ulang',['nisn_santri' => $nisn])->row_array();
            $this->load->view('templates/header');
            $this->load->view('home/pembayaran',$data);
            $this->load->view('templates/footer');
            } else {
            $insert = [
                'nama_ortu' => $this->input->post('nama_ortu'),
                'alamat_rumah'  => $this->input->post('alamat_rumah'),
                'no_hp' => $this->input->post('no_hp'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_kantor' => $this->input->post('alamat_kantor'),
                'telepon' => $this->input->post('telepon'),
                'nisn' => $nisn,
                'yts_cabang' => $this->input->post('yts_cabang'),
                'kelas_santri' => $this->input->post('kelas_santri'),
            ];
            $this->db->insert('pembayaran',$insert);
            redirect('home/perjanjian/'.$nisn);
        }
    }

    
    public function edit_pembayaran($nisn)
    {

        $this->form_validation->set_rules('nama_ortu','Nama_ortu','required');
        $this->form_validation->set_rules('alamat_rumah','Alamat_rumah','required');
        $this->form_validation->set_rules('no_hp','No_hp','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        $this->form_validation->set_rules('alamat_kantor','Alamat_kantor','required');
        $this->form_validation->set_rules('nisn','NISN','required');
        //$this->form_validation->set_rules('yts_cabang','Yts_cabang','required');
        $this->form_validation->set_rules('kelas_santri','Kelas_santri','required');
        // insert ke tabel daftar_ulang
        if ($this->form_validation->run()==false) {
            $this->session->set_flashdata('flash','<div class="alert alert-danger" role="alert">Data anda salah</div>');
            
        $this->db->join('pembayaran','pembayaran.nisn=daftar_ulang.nisn_santri','left');
        $data['pendaftar'] = $this->db->get_where('daftar_ulang',['daftar_ulang.nisn_santri' => $nisn])->row_array();
            $this->load->view('templates/header');
            $this->load->view('home/pembayaran_edit',$data);
            $this->load->view('templates/footer');
            } else {
            $update = [
                'nama_ortu' => $this->input->post('nama_ortu'),
                'alamat_rumah'  => $this->input->post('alamat_rumah'),
                'no_hp' => $this->input->post('no_hp'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat_kantor' => $this->input->post('alamat_kantor'),
                'telepon' => $this->input->post('telepon'),
                'nisn' => $nisn,
                'yts_cabang' => $this->input->post('yts_cabang'),
                'kelas_santri' => $this->input->post('kelas_santri'),
            ];
            $this->db->update('pembayaran',$update,['nisn' => $nisn]);

            $update = [
                'nama' => $this->input->post('nama'),
                'lulusan'  => $this->input->post('lulusan'),
                'no_telp' => $this->input->post('no_telp'),
                'nik' => $this->input->post('nik'),
                'nisn_santri' => $this->input->post('nisn'),
                'uk_baju' => $this->input->post('baju'),
                'uk_celana' => $this->input->post('celana'),
                'uk_kopiyah' => $this->input->post('take'),
                'infaq' => $this->input->post('infaq'),
            ];
            $this->db->update('daftar_ulang',$update,["nisn_santri" => $nisn]);


            redirect('home/perjanjian/'.$nisn);
        }
    }
}
