<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function cek($user,$password)
    {
        return $this->db->get_where('user', array('username'=>$user, 'password'=>$password));
    }

    public function register($data)
    {
        return $this->db->insert('user',$data);
    }
    public function getUSerById($id)
    {
        return $this->db->get_where('user', array('id'=>$id))->row_array();
    }
    public function updateUser($data)
    {
        $this->db->where('id',$this->session->userdata('id'));
        $this->db->update('user',$data);
    }
    public function hitungTotalMember()
    {
        $this->db->where('role','member');
        $query = $this->db->get('user');

        return $query->num_rows();
    }

}
