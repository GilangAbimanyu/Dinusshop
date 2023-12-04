<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('Keranjang_model');
		$this->load->model('Cekout_model');
		if($this->session->userdata('role') == 'member'){

		}else{
			return redirect('login');
		}
	}

    public function index()
    {
        $keranjang = $this->Keranjang_model->getAllDataKeranjang();

        $data = [
            'keranjang'=>$keranjang,
        ];
        
        // var_dump($keranjang);
        $this->load->view('member/template_header');
        $this->load->view('member/produk/keranjang',$data);
        $this->load->view('member/template_footer');
    }

    public function ubahQtyKeranjang($id)
    {
        if($this->input->post('qty') >= 1){
            $data = [
                'id' => $id, 
                'qty' => $this->input->post('qty'), 
                'total' => $this->input->post('qty')*$this->input->post('harga'), 
            ];
            
            $this->Keranjang_model->updateQtyKeranjang($data);
            return redirect('keranjang');
        }else{
            return redirect('keranjang');
        }
    }

    public function hapusKeranjang($id)
    {
        $this->Keranjang_model->hapusKeranjang($id);
        return redirect('keranjang');
    }

    public function cekout()
    {
        $keranjang = $this->Keranjang_model->getAllDataKeranjang();

        $data = [
            'keranjang'=>$keranjang,
        ];

        $this->load->view('member/template_header');
        $this->load->view('member/produk/cekoutkeranjang',$data);
        $this->load->view('member/template_footer');
    }

    public function bayarSekarang()
    {
        $keranjang = $this->Keranjang_model->getAllDataKeranjang();

        $item = []; 
        foreach($keranjang as $keranjang){
            $produk = $this->Produk_model->getDataProdukById($keranjang['produk_id']);
            $data = [
                'produk_id' => $produk['produk_id'],
                'nama_produk' => $produk['nama_produk'],
                'harga' => $produk['harga'],
                'foto' => $produk['foto'],
                'qty' => $keranjang['qty'],
                'total' => $keranjang['total'],
            ];
            array_push($item,$data);
        }

        $datainsert = [
            'user_id' => $this->session->userdata('id'),
            'item' => json_encode($item),
            'status' => 'Menunggu Konfirmasi',
            'alamat_pengiriman' => $this->input->post('alamat_pengiriman'),
        ];


        $this->Cekout_model->insertCekout($datainsert);
        $this->Keranjang_model->hapusKeranjangByUserId($this->session->userdata('id'));
        return redirect('pesanan');
    }

}