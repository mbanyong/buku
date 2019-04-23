<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    function __construct(){
        parent::__construct();

        $this->load->model('kategori_model');
       
        $this->load->helper('url');
    }

	public function index()
	{
        $jumlah_data = $this->kategori_model->jumlah_data();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'kategori/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;

        // class pagination bootstrap 4 
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Selanjutnya';
		$config['prev_link']        = 'Sebelumnya';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

        $from = $this->uri->segment(3);

        $this->pagination->initialize($config);
       
        $data['data']=$this->kategori_model->tampil_data($config['per_page'], $from);
        $data['no'] = $from;
        $this->load->view('kategori/index', $data);
    }
    
    public function tambah(){
        $this->load->view('kategori/tambah');
    }  

    public function simpan(){
        $data=array(
            'nama_kategori'=>$this->input->post('nama'),
        );

        $this->kategori_model->input_data($data);
        redirect('kategori');
    }

    public function edit($id){
        $data['data']=$this->kategori_model->spesifik_data($id);
        $this->load->view('kategori/edit', $data);

    }

    public function update(){
        $id_kategori = $this->input->post('id');
        $data = array(
            'nama_kategori'=>$this->input->post('nama'),

        );
        $this->kategori_model->update_data($data, $id_kategori);
        redirect('kategori');
    }

    function hapus($id){
        $this->kategori_model->hapus_data($id);
        redirect('kategori');
    }
}//class kategori
