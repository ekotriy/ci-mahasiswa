<?php 

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        //load url
        //$this->load->helper('url');
        $this->load->library('form_validation');
    }

    //method index
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getJoin();
        $data['judul']='Home';
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
    }

    //method tambah
    public function tambah()
    {
        $data['mahasiswa']=$this->Mahasiswa_model->getProdi();
        $data['judul']='Tambah Mahasiswa';

        
        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('ttl','Tangal lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        
        if($this->form_validation->run()===false){
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/tambah',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->setTambahMahasiswa();
            $this->session->set_flashdata('flash','ditambahkan');
                        redirect('home');
        }

        
    }

    //method detail mahasiswa
    public function detail($nim)
    {
        $data['mahasiswa']=$this->Mahasiswa_model->getJoinByNim($nim);
        
        $data['judul']='Detail Mahasisawa';
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/detail',$data);
        $this->load->view('templates/footer');
    }

    //method edit mahasiswa berdasarkan nim
    public function edit($nim)
    {
        $data['mhs']=$this->Mahasiswa_model->getDataMahasiswaByNim($nim);
        $data['prodi']=$this->Mahasiswa_model->getProdi();
        $data['judul']='Edit Mahasiswa';

        $this->form_validation->set_rules('nim','Nim','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('ttl','Tangal lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        
        if($this->form_validation->run()===false){
            $this->load->view('templates/header',$data);
            $this->load->view('mahasiswa/edit',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->setEditMahasiswa($nim);
            $this->session->set_flashdata('flash','diedit');
                        redirect('home');
        }
        
        // $this->load->view('templates/header',$data);
        // $this->load->view('mahasiswa/edit');
        // $this->load->view('templates/footer');
    }

    //method hapus mahasiswa berdasarkan nim
    public function hapus($nim)
    {
        $this->Mahasiswa_model->setHapusMahasiswa($nim);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('home');
    }
}