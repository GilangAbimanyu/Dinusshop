<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model');
		if($this->session->userdata('role') == 'member'){

		}else{
			return redirect('login');
		}
	}

    public function index()
    {
        $produk = $this->Produk_model->getDataProduk();

        $data = [
            'produk'=>$produk,
        ];
        
        $this->load->view('member/template_header');
        $this->load->view('member/review',$data);
        $this->load->view('member/template_footer');
    }

    
}