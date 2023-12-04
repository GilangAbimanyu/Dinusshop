<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('Cekout_model');
		$this->load->model('Ulasan_model');
		if($this->session->userdata('role') == 'member'){

		}else{
			return redirect('login');
		}
	}

    public function index()
    {
        $pesanan = $this->Cekout_model->getDataTransaksiByUserId($this->session->userdata('id'));

        $data = [
            'pesanan' => $pesanan
        ];
        $this->load->view('member/template_header');
        $this->load->view('member/pesanan/index',$data);
        $this->load->view('member/template_footer');
    }
    
    public function detail($id)
    {
        $transaksi = $this->Cekout_model->getDataTransaksiById($id);

        $item = json_decode($transaksi['item']);
        // var_dump($item);

        $data = [
            'item' => $item,
            'transaksi' => $transaksi,
        ];
        $this->load->view('member/template_header');
        $this->load->view('member/pesanan/detailpesanan',$data);
        $this->load->view('member/template_footer');
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/buktitransfer';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$foto = $this->upload->data();
		$namafoto = $_FILES['foto']['name'];
		$namafoto = str_replace(" ","_",$namafoto);

		if(!$this->upload->do_upload('foto')){
			echo "GAGAL";
		}else{
			$data = [
				'bukti_tf' => $namafoto,
			];
			$this->Cekout_model->updateDataPesanan($data);
			return redirect('pesanan');
		}
    }

    public function beriUlasan()
    {
        $pesanan = $this->Cekout_model->getDataTransaksiById($this->input->post('cekout_id'));

        $loop = json_decode($pesanan['item']);

        foreach($loop as $loop){
            $data = [
                'user_id' => $this->session->userdata('id'),
                'produk_id' => $loop->produk_id,
                'bintang' => $this->input->post('bintang'),
                'ulasan' => $this->input->post('ulasan'),
            ];
            $ubahStatusPesanan = [
                'status' => 'Diterima'
            ];
            $this->Ulasan_model->insertUlasan($data);
            $this->Cekout_model->updateDataPesanan($ubahStatusPesanan);
        }
        return redirect('pesanan');
    }

}