<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('User_model');
		$this->load->model('News_model');
		if($this->session->userdata('role') == 'member'){

		}else{
			return redirect('login');
		}
	}

    public function aboutus()
    {
        $this->load->view('member/template_header');
        $this->load->view('member/produk/aboutus');
        $this->load->view('member/template_footer');
    }

    public function index()
    {
        $brands = $this->Brands_model->getDataBrands();
        $produk = $this->Produk_model->getProdukByDescending();

        $data = [
            'brands'=>$brands,
            'produk'=>$produk,
        ];
        
        $this->load->view('member/index',$data);
    }

    public function profil()
    {
        $member = $this->User_model->getUSerById($this->session->userdata('id'));

        $data = [
            'member' => $member,
        ];

        // var_dump($data);
        $this->load->view('member/template_header');
        $this->load->view('member/profil/index',$data);
        $this->load->view('member/template_footer');
    }

    public function updateProfil()
    {
        $config['upload_path'] = './uploads/profil';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$foto = $this->upload->data();
		$namafoto = $_FILES['foto']['name'];
		$namafoto = str_replace(" ","_",$namafoto);

        if(!$this->upload->do_upload('foto')){
            return "GAGAL";
        }else{
            $member = $this->User_model->getUSerById($this->session->userdata('id'));
            if($member['foto']!=null){
                unlink("./uploads/profil/".$member['foto']);
            }
            $data = [
                'foto' => $namafoto,
            ];
            $this->User_model->updateUser($data);
            return redirect('home/profil');
        }
    }

    public function news()
    {
        $news = $this->News_model->getAllNews();

        $data = [
            'news' => $news
        ];
        $this->load->view('member/template_header');
        $this->load->view('member/news',$data);
        $this->load->view('member/template_footer');
    }

}