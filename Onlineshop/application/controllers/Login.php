<?php
class Login extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index_login()
	{
		$this->load->view('login/index');
	}

	public function index()
	{
        $this->session->set_userdata('id', '2');
        $this->session->set_userdata('user','guest');
        $this->session->set_userdata('role','member');
        return redirect('/home');
        // $this->load->view('login/index');
	}

	public function postLogin()
	{
		$user = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		$query = $this->User_model->cek($user,$password);
		$cek = $query->row_array();

		if($cek == null){
            $this->session->set_flashdata('flashgagal','Username atau password yang anda masukkan salah');
			return redirect('login/index_login');
		}else{
			if($cek['role'] == 'admin'){
				$this->session->set_userdata('user', $cek['nama']);
				$this->session->set_userdata('role', $cek['role']);
				return redirect('/admin');
			}else{
				$this->session->set_userdata('id', $cek['id']);
				$this->session->set_userdata('user', $cek['nama']);
				$this->session->set_userdata('role', $cek['role']);
				$this->session->set_userdata('foto', $cek['foto']);
				return redirect('/home');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect('login');
	}

}