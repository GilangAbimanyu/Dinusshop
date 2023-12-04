<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ulasan_model extends CI_Model
{
    public function insertUlasan($data)
    {
        return $this->db->insert('ulasan',$data);
    }      
    
    public function getUlasanByIdProduk($id)
    {
        // $query = $this->db->get_where('ulasan',['produk_id'=>$id]);
        $this->db->select('*');
        $this->db->from('ulasan');
        $this->db->join('user', 'ulasan.user_id = user.id');
        $this->db->where('produk_id',$id);
        $query = $this->db->get();

        return $query->result_array();
    }
    
}