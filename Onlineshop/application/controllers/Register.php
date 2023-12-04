<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
        $this->load->library('form_validation');
	}

    public function index()
    {
        $this->load->view('login/register');
    }
    public function postRegister()
    {
        $this->form_validation->set_rules('username','Username','required|is_unique[user.username]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('login/register');
        }else{
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'nomor' => $this->input->post('nomor'),
                'password' => md5($this->input->post('password')),
                'role' => 'member',
                'foto' => ''
            ];
    
            $this->User_model->register($data);
            $this->session->set_flashdata('flash','Pendaftaran Berhasil');
            return redirect('login/index_login');
        }
    }


}