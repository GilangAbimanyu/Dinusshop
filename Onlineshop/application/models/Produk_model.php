<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    
    public function tambahDataProduk($data)
    {
        return $this->db->insert('produk',$data);
    }
    public function getDataProduk()
    {
        $query = $this->db->get('produk');
        
        return $query->result_array();
    }
    public function getProdukByDescending()
    {
        $this->db->from('produk');
        $this->db->order_by("created_at", "DESC");
        $this->db->limit(4);
        $query = $this->db->get(); 
        
        return $query->result_array();
    }

    public function delProdukById($id)
    {
        $this->db->where('produk_id', $id);
        $this->db->delete('produk');
    }

    public function getDataProdukById($id)
    {
        $query = $this->db->get_where('produk',['produk_id'=>$id])->row_array();

        return $query;
    }
    public function updateDataProduk($data)
    {
        $this->db->where('produk_id', $data['produk_id']);
        $this->db->update('produk', $data);
    }
      
    public function hitungTotalProduk()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function getProdukByBrandsId($id)
    {
        $this->db->where('brands_id',$id);
        $query = $this->db->get('produk');

        return $query->result_array();
    }

    public function cariProduk()
    {
        $this->db->like('nama_produk', $this->input->post('cari'));
        $query = $this->db->get('produk');

        return $query->result_array();
    }
}