<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('User_model');
		$this->load->model('News_model');
		if($this->session->userdata('role') == 'admin'){

		}else{
			return redirect('login');
		}
	}

    public function index()
    {
        $news = $this->News_model->getAllNews();

        $data = [
            'news' => $news
        ];
        $this->load->view('admin/template_header');
        $this->load->view('admin/news/index',$data);
        $this->load->view('admin/template_footer');
    }

    public function addNews()
    {
        $config['upload_path'] = './uploads/news';
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
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'foto' => $namafoto,
            ];
            $this->News_model->addNews($data);
            return redirect('news');
        }
    }

    public function edit($id)
    {
        $news = $this->News_model->getNewsById($id);

        $data = [
            'news' => $news
        ];
        var_dump($news);
        $this->load->view('admin/template_header');
        $this->load->view('admin/news/editnews',$data);
        $this->load->view('admin/template_footer');
    }

    public function updateNews()
    {
        $config['upload_path'] = './uploads/news';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$foto = $this->upload->data();
		$namafoto = $_FILES['foto']['name'];
		$namafoto = str_replace(" ","_",$namafoto);

        if(!$this->upload->do_upload('foto')){
            $data = [
                'id' => $this->input->post('id'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
            ];
            $this->News_model->updateNews($data);
            $this->session->set_flashdata('flash','Diubah');
            return redirect('news');
        }else{
            $news = $this->News_model->getNewsById($this->input->post('id'));
            $data = [
                'id' => $this->input->post('id'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'foto' => $namafoto,
            ];
            unlink("./uploads/news/".$news['foto']);
            $this->News_model->updateNews($data);
            $this->session->set_flashdata('flash','Diubah');
            return redirect('news');
        }
        
    }

    public function hapus($id)
    {
        // get data news
        $news = $this->News_model->getNewsById($id);

        // hapus foto news yang lama
        unlink("./uploads/news/".$news['foto']);

        // hapus news
        $this->News_model->delNewsById($id);
        $this->session->set_flashdata('flash','Diubah');
        return redirect('news');
    }

    

}