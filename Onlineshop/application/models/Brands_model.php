<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Brands_model extends CI_Model
{
    

    public function tambahDataBrands($data)
    {
        $this->db->insert('brands',$data);
        
    }
    public function getDataBrands()
    {
        $query = $this->db->get('brands');
        
        return $query->result();
    }

    public function delBrandsById($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('brands');
    }

    public function getDataBrandsById($id)
    {
        $query = $this->db->get_where('brands',['id'=>$id])->row_array();

        return $query;
    }
    public function updateDataBrands($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('brands', $data);
    }

    

}