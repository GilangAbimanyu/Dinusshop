<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{

    public function addNews($data)
    {
        return $this->db->insert('news',$data);
    }

    public function getAllNews()
    {
        return $this->db->get('news')->result_array();
    }
    public function getNewsById($id)
    {
        return $this->db->get_where('news',['id'=>$id])->row_array();
    }

    public function updateNews($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('news', $data);
    }

    public function delNewsById($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
    }
    
    public function hitungTotalNews()
    {
        return $this->db->get('news')->num_rows();
    }
}
