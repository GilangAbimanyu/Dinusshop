<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('Keranjang_model');
		$this->load->model('Ulasan_model');
		if($this->session->userdata('role') == 'member'){

		}else{
			return redirect('login');
		}
	}

    public function index()
    {
        $brands = $this->Brands_model->getDataBrands();
        $produk = $this->Produk_model->getDataProduk();

        $data = [
            'brands'=>$brands,
            'produk'=>$produk,
        ];
        
        $this->load->view('member/produk/index',$data);
    }

    public function detail($id)
    {
        $produk = $this->Produk_model->getDataProdukById($id);
        $ulasan = $this->Ulasan_model->getUlasanByIdProduk($id);

        $data = [
            'produk' => $produk,
            'ulasan' => $ulasan,
        ];
        $this->load->view('member/template_header');
        $this->load->view('member/produk/detailproduk',$data);
        $this->load->view('member/template_footer');
    }

    public function addToCart()
    {

        $idguest = $this->session->userdata('id');
        if($idguest == 2){
            redirect('login/index_login');
        }
        
        // cek apakah produk sudah ada di keranjang
        $cek = $this->Keranjang_model->cekProdukDiKeranjang();

        // return var_dump($cek);

        if($cek>0){
            $this->session->set_flashdata('flashgagal','Produk sudah ada di keranjang anda');
            return redirect('produk/detail/'.$this->input->post('produk_id'));
        }else{
            $data = [
                'user_id' => $this->session->userdata('id'),
                'produk_id' => $this->input->post('produk_id'),
                'qty' => 1,
                'total' =>  $this->input->post('harga'),
            ];
    
            $this->Keranjang_model->addToCart($data);
            $this->session->set_flashdata('flash','Dimasukkan Keranjang');
            return redirect('produk/detail/'.$this->input->post('produk_id'));
        }
    }

    public function cekout()
    {
        $produk = $this->Produk_model->getDataProdukById($this->input->post('produk_id'));
        

        // cek apakah produk sudah ada di keranjang
        $cek = $this->Keranjang_model->cekProdukDiKeranjang();
        $idguest = $this->session->userdata('id');
        if($idguest == 2){
            return redirect('login/index_login');
        }else if($cek>0){
            return redirect('keranjang');
        }else{
            $data = [
                'user_id' => $this->session->userdata('id'),
                'produk_id' => $this->input->post('produk_id'),
                'qty' => $this->input->post('quantity'),
                'total' =>  $this->input->post('quantity')*$produk['harga'],
            ];
    
            $this->Keranjang_model->addToCart($data);
            return redirect('keranjang');
        }
    }
    public function brands($id)
    {
        $produk = $this->Produk_model->getProdukByBrandsId($id);
        $brands = $this->Brands_model->getDataBrandsById($id);

        $data = [
            'produk' => $produk,
            'brands' => $brands,
        ];
        // var_dump($produk);
        $this->load->view('member/template_header');
        $this->load->view('member/produk/brands',$data);
        $this->load->view('member/template_footer');
    }

    public function cari()
    {
        $produk = $this->Produk_model->cariProduk();
        $kosong = null;
        if($produk == null){
            $kosong = "-- Hasil Tidak Ditemukan --";
        }

        $data = [
            'produk' => $produk,
            'kosong' => $kosong,
        ];
        // var_dump($produk);
        $this->load->view('member/template_header');
        $this->load->view('member/produk/pencarian',$data);
        $this->load->view('member/template_footer');

    }
}