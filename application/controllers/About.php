<?php 
class About extends CI_Controller{
    //method index about
    public function index()
    {
        $data['judul']='About Me';
        $this->load->view('templates/header',$data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}