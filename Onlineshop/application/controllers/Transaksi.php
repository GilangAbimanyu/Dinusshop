<?php
class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('Cekout_model');
		if($this->session->userdata('role') == 'admin'){

		}else{
			return redirect('login');
		}
	}
	public function index()
	{
        $transaksi = $this->Cekout_model->getAllDataTransaksi();

        // var_dump($transaksi);
        $data = [
            'transaksi' => $transaksi
        ];
		$this->load->view('admin/template_header');
		$this->load->view('admin/transaksi/index',$data);
		$this->load->view('admin/template_footer');
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

        // var_dump($data);
        $this->load->view('admin/template_header');
		$this->load->view('admin/transaksi/detailtransaksi',$data);
		$this->load->view('admin/template_footer');
    }
	
	public function konfirmasi()
	{
		$data = [
			'resi' => $this->input->post('resi'),
			'status' => 'Dikirim'
		];

		$this->Cekout_model->updateDataPesanan($data);
		return redirect('transaksi');
	}
}