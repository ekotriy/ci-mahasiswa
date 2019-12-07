<?php 
class Mahasiswa_model extends CI_Model{
    
    //method menampilkan tabel mahasiswa dari database test_2
    public function getMahasiswa()
    {
        $query= $this->db->get('mahasiswa');
        return $query->result_array();
    }

    //method menampilkan tabel prodi dari database test_2
    public function getProdi()
    {
        $query = $this->db->get('prodi');
        return $query->result_array();
    }

    //method mengambil foto berdasarkan nim
    public function getFoto($nim)
    {
        return $this->db->get_where('mahasiswa',array('nim'=>$nim))->row()->foto; 
    }

    //method menghapus foto
    public function hapusFoto($nim)
    {
        $foto = $this->db->get_where('mahasiswa',array('nim'=>$nim))->row()->foto;     
        unlink("assets/foto/".$foto);
    }
    //method join tabel mahasiswa dan prodi dari database test_2
    public function getJoin()
    {
    $this->db->select('*');
    $this->db->from('mahasiswa');
    $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi');
    //$this->db->where('mahasiswa.nim',$nim);
    $this->db->order_by('mahasiswa.nim','asc');
    $query = $this->db->get();
    return $query->result_array();
    }

    //method detail berdasarkan nim
    public function getJoinByNim($nim)
    {
    $this->db->select('*');
    $this->db->from('mahasiswa');
    $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi');
    $this->db->where('mahasiswa.nim',$nim);
    // $this->db->order_by('mahasiswa.nim','asc');
    $query = $this->db->get();
    return $query->row_array();
    }

    //method tambah data ke tabel mahasiswa
    public function setTambahMahasiswa()
    {
        $data=[
            "nim"=>$this->input->post('nim',true),
            "nama"=>$this->input->post('nama',true),
            "id_prodi"=>$this->input->post('jurusan',true),
            "tgl_lahir"=>$this->input->post('ttl',true),
            "alamat"=>$this->input->post('alamat',true),
            "foto"=>$this->Ungah()
        ];
        return $this->db->insert('mahasiswa', $data);   
    }

    //method edit data tabel mahasiswa
    public function setEditMahasiswa($nim)
    {
        if(!empty($_FILES['foto']['name'])){
            $this->hapusFoto($nim);
            $foto = $this->Ungah();
            } else {
             $foto = (!empty($this->getFoto($nim))) ? $this->getFoto($nim) : "default.png";
            }
           
        $data=[
            "nim"=>$this->input->post('nim',true),
            "nama"=>$this->input->post('nama',true),
            "id_prodi"=>$this->input->post('prodi',true),
            "tgl_lahir"=>$this->input->post('ttl',true),
            "alamat"=>$this->input->post('alamat',true),
            "foto"=> $foto
        ];
        
        $this->db->where('nim',$this->input->post('nim'));
        $this->db->update('mahasiswa', $data,['nim'=>$nim]);
    }

    //method edit berdasarkan nim
    public function getDataMahasiswaByNim($nim)
    {
        return $this->db->get_where('mahasiswa',['nim'=>$nim])->row_array();
    }

    //method hapus tabel mahasiswa
    public function setHapusMahasiswa($nim)
    {
        $this->hapusFoto($nim);
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
        
        
    }

    //method cari data mahasiswa di tabel mahasiswa
    public function setCariMahasiswa()
    {
        $keyword= $this->input->post('keyword',true);
        $this->db->like('nim',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->or_like('alamat',$keyword);
        return $this->db->get('mahasiswa')->result_array();
    }

    //method menyimpan nama file foto
    private function Ungah()
    {
        $config['upload_path'] = './assets/foto/';
        $config['allowed_types']= 'jpg|png';
        $config['file_name'] = url_title($this->input->post('nama'),'dash',TRUE);
        $config['overwrite'] = true;
        $config['max_size'] = 1024; //1MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

}