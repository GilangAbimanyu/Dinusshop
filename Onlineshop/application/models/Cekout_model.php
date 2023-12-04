<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cekout_model extends CI_Model
{
    public function insertCekout($data)
    {
        return $this->db->insert('cekout',$data);
    }        
    public function getAllDataTransaksi()
    {
        // $this
        // return $this->db->get('cekout')->result_array();
        $this->db->select('*');
        $this->db->from('cekout');
        $this->db->join('user','user.id = cekout.user_id');      
        $query = $this->db->get();
        return $query->result_array();
    }        

    public function getDataTransaksiById($id)
    {
        return $this->db->get_where('cekout',['cekout_id'=>$id])->row_array();
    }
    public function getDataTransaksiByUserId($id)
    {
        return $this->db->get_where('cekout',['user_id'=>$id])->result_array();
    }
    public function updateDataPesanan($data)
    {
        $this->db->where('cekout_id',$this->input->post('cekout_id'));
        $this->db->update('cekout',$data);
    }
    public function hitungTotalTransaksi()
    {
        $this->db->where('status','Diterima');
        $query = $this->db->get('cekout');

        return $query->num_rows();
    }

}