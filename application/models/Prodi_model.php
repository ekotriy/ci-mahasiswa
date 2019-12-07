<?php 
class Prodi_model extends CI_Model{

    //method tabel prodi dari database test_2
    public function getProdi()
    {
        $query= $this->db->get('prodi');
        return $query->result_array();
    }

    //method detail prodi 
    public function getMif($prodi)
    {
    $this->db->select('*');
    $this->db->from('prodi');
    $this->db->join('mahasiswa', 'mahasiswa.id_prodi = prodi.id_prodi');
    $this->db->where('prodi.id_prodi',$prodi);
    // $this->db->order_by('mahasiswa.nim','asc');
    $query = $this->db->get();
    return $query->result_array();
    }

    //method tambah prodi
    public function setTambahProdi()
    {
        $data=[
            "id_prodi"=>$this->input->post('id_prodi',true),
            "prodi"=>$this->input->post('prodi',true)
        ];
        return $this->db->insert('prodi', $data);   
    }

    //method ambil id_prodi
    public function getDataProdi($prodi)
    {
        return $this->db->get_where('prodi',['id_prodi'=>$prodi])->row_array();
    }

    //method edit prodi
    public function setEditProdi()
    {
        $data=[
            "id_prodi"=>$this->input->post('id_prodi',true),
            "prodi"=>$this->input->post('prodi',true)
        ];
        $this->db->where('id_prodi',$this->input->post('id_prodi'));
        $this->db->update('prodi', $data);  
    }

    //method hapus prodi
    public function setHapusProdi($prodi)
    {
        
        $this->db->where('id_prodi', $prodi);
        $this->db->delete('prodi');
    }
}