<?php 
class Prodi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
        $this->load->library('form_validation');
    }

    //method index prodi
    public function index()
    {
        $data['prodi']=$this->Prodi_model->getProdi();
        $data['judul']='Dafar Prodi';
        $this->load->view('templates/header',$data);
        $this->load->view('prodi/index',$data);
        $this->load->view('templates/footer');
    }

    //method detail prodi
    public function detail($prodi)
    {
        $data['prodi']=$this->Prodi_model->getMif($prodi);
        $data['judul']='Detail Prodi';
        $this->load->view('templates/header',$data);
        $this->load->view('prodi/detail',$data);
        $this->load->view('templates/footer');
    }
    
    //method tambah
    public function tambah()
    {
        $this->form_validation->set_rules('id_prodi','Id Prodi','required');
        $this->form_validation->set_rules('prodi','Prodi','required');
        
        if($this->form_validation->run()===false){
            $data['judul']='Tambah Prodi';
            $this->load->view('templates/header',$data);
            $this->load->view('prodi/tambah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Prodi_model->setTambahProdi();
            $this->session->set_flashdata('flash','ditambahkan');
                        redirect('prodi');
        }
    }

    //method edit
    public function edit($prodi)
    {
        $data['prodi']=$this->Prodi_model->getDataProdi($prodi);
        $data['judul']='Edit Prodi';
        $this->form_validation->set_rules('id_prodi','Id Prodi','required');
        $this->form_validation->set_rules('prodi','Prodi','required');
        
        if($this->form_validation->run()===false){
            $this->load->view('templates/header',$data);
            $this->load->view('prodi/edit',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Prodi_model->setEditProdi();
            $this->session->set_flashdata('flash','ditambahkan');
                        redirect('prodi');
        }
    }

    //method hapus
    public function hapus($prodi)
    {
        $this->Prodi_model->setHapusProdi($prodi);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('prodi');
    }
}