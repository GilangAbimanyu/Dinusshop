<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_model extends CI_Model
{
    public function addToCart($data)
    {
        return $this->db->insert('keranjang',$data);
    }        

    public function cekProdukDiKeranjang()
    {
        return $this->db->get_where('keranjang',['produk_id' => $this->input->post('produk_id'), 'user_id'=>$this->session->userdata('id')])->num_rows();
    }
    public function getAllDataKeranjang()
    {
        $this->db->select('*');
        // $this->db->form('keranjang');
        $this->db->join('produk', 'keranjang.produk_id = produk.produk_id');
        $query = $this->db->get_where('keranjang',['user_id'=>$this->session->userdata('id')]);
        return $query->result_array();
    }

    public function updateQtyKeranjang($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('keranjang',$data);
    }
    public function hapusKeranjang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('keranjang');
    }
    
    public function hapusKeranjangByUserId($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('keranjang');        
    }

}