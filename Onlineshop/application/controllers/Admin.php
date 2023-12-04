<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Brands_model');
		$this->load->model('Produk_model');
		$this->load->model('User_model');
		$this->load->model('News_model');
		$this->load->model('Cekout_model');
		if($this->session->userdata('role') == 'admin'){

		}else{
			return redirect('login');
		}
	}
	public function index()
	{
		$member = $this->User_model->hitungTotalMember();
		$produk = $this->Produk_model->hitungTotalProduk();
		$news = $this->News_model->hitungTotalNews();
		$transaksi = $this->Cekout_model->hitungTotalTransaksi();

		$data = [
			'member' => $member,
			'produk' => $produk,
			'news' => $news,
			'transaksi' => $transaksi,
		];

		// var_dump($data);
		$this->load->view('admin/template_header');
		$this->load->view('admin/index',$data);
		$this->load->view('admin/template_footer');
	}
	
	public function produk()
	{
		$brands = $this->Brands_model->getDataBrands();
		$produk = $this->Produk_model->getDataProduk();

		$data = [
			'brands' => $brands,
			'produk' => $produk,
		];
		$this->load->view('admin/template_header');
		$this->load->view('admin/produk/index',$data);		
		$this->load->view('admin/template_footer');
	}
	public function brands()
	{
		$brands = $this->Brands_model->getDataBrands();

		$data = [
			'brands' => $brands
		];

		
		$this->load->view('admin/template_header');
		$this->load->view('admin/brands/brands',$data);		
		$this->load->view('admin/template_footer');
	}

	public function postBrands()
	{		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$logo = $this->upload->data();
		$namalogo = $_FILES['logo']['name'];
		$namalogo = str_replace(" ","_",$namalogo);
		$nama = $this->input->post('nama_brands',true);

		if(!$this->upload->do_upload('logo')){
			echo "GAGAL";
		}else{
			$data = [
				'nama_brands' => $nama,
				'logo' => $namalogo,
			];
			$this->Brands_model->tambahDataBrands($data);
			return redirect('admin/brands');
		}
		
	}
	public function postProduk()
	{		
		$config['upload_path'] = './uploads/produk';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$logo = $this->upload->data();
		$namafoto = $_FILES['foto']['name'];
		$namafoto = str_replace(" ","_",$namafoto);

		$namaproduk = $this->input->post('nama_produk',true);
		$brands_id = $this->input->post('brands_id',true);
		$harga = $this->input->post('harga',true);
		$stok = $this->input->post('stok',true);
		$deskripsi = $this->input->post('deskripsi',true);
		$review = $this->input->post('review',true);

		if(!$this->upload->do_upload('foto')){
			echo "GAGAL UPLOAD";
		}else{
			$data = [
				'nama_produk' => $namaproduk,
				'brands_id' => $brands_id,
				'harga' => $harga,
				'stok' => $stok,
				'deskripsi' => $deskripsi,
				'foto' => $namafoto,
				'review' => $review,
			];
			$this->session->set_flashdata('flash','Ditambahkan');
			$this->Produk_model->tambahDataProduk($data);
			return redirect('admin/produk');
		}
		
	}
	public function hapusBrands($id)
	{
		// ambil data brands
		$brand = $this->Brands_model->getDataBrandsById($id);
		
		// hapus file yg terupload
		unlink("./uploads/".$brand['logo']);

		// hapus brands
		$this->Brands_model->delBrandsById($id);

		$this->session->set_flashdata('flash','Dihapus');
		return redirect('admin/brands');
	}
	public function hapusProduk($id)
	{
		// ambil data produk
		$produk = $this->Produk_model->getDataProdukById($id);

		// hapus file yg terupload
		unlink("./uploads/produk/".$produk['foto']);

		// hapus produk
		$this->Produk_model->delProdukById($id);

		$this->session->set_flashdata('flash','Dihapus');
		return redirect('admin/produk');
	}

	public function editBrands($id)
	{
		// ambil data brands
		$brand = $this->Brands_model->getDataBrandsById($id);

		$data = [
			'brands' => $brand
		];
		$this->load->view('admin/template_header');
		$this->load->view('admin/brands/editbrands',$data);		
		$this->load->view('admin/template_footer');
	}
	public function editProduk($id)
	{
		// ambil data Produk
		$produk = $this->Produk_model->getDataProdukById($id);
		$brands = $this->Brands_model->getDataBrands();

		$data = [
			'produk' => $produk,
			'brands' => $brands,
		];
		$this->load->view('admin/template_header');
		$this->load->view('admin/produk/editproduk',$data);		
		$this->load->view('admin/template_footer');
	}
	
	public function updateBrands()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$logo = $this->upload->data();
		$namalogo = $_FILES['logo']['name'];
		$namalogo = str_replace(" ","_",$namalogo);
		$nama = $this->input->post('nama_brands',true);

		if(!$this->upload->do_upload('logo')){
			$data = [
				'id' => $this->input->post('id'),
				'nama_brands' => $nama,
			];
			$this->Brands_model->updateDataBrands($data);
			$this->session->set_flashdata('flash','Diubah');
			return redirect('admin/brands');
		}else{
			$brand = $this->Brands_model->getDataBrandsById($this->input->post('id'));
			$data = [
				'id' => $this->input->post('id'),
				'nama_brands' => $nama,
				'logo' => $namalogo,
			];
			unlink("./uploads/".$brand['logo']);
			$this->Brands_model->updateDataBrands($data);
			$this->session->set_flashdata('flash','Diubah');
			return redirect('admin/brands');
		}
	}
	public function updateProduk()
	{
		$config['upload_path'] = './uploads/produk';
		$config['allowed_types'] = '*';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		
		$this->load->library('upload',$config);

		$foto = $this->upload->data();
		$namafoto = $_FILES['foto']['name'];
		$namafoto = str_replace(" ","_",$namafoto);

		$nama = $this->input->post('nama_produk',true);
		$harga = $this->input->post('harga',true);
		$stok = $this->input->post('stok',true);
		$deskripsi = $this->input->post('deskripsi',true);
		$review = $this->input->post('review',true);

		if(!$this->upload->do_upload('foto')){
			$data = [
				'produk_id' => $this->input->post('id'),
				'brands_id' => $this->input->post('brands_id'),
				'nama_produk' => $nama,
				'harga' => $harga,
				'stok' => $stok,
				'deskripsi' => $deskripsi,
				'review' => $review,
			];
			$this->Produk_model->updateDataProduk($data);
			$this->session->set_flashdata('flash','Diubah');
			return redirect('admin/produk');
		}else{
			$produk = $this->Produk_model->getDataProdukById($this->input->post('id'));
			$data = [
				'produk_id' => $this->input->post('id'),
				'brands_id' => $this->input->post('brands_id'),
				'nama_produk' => $nama,
				'harga' => $harga,
				'stok' => $stok,
				'deskripsi' => $deskripsi,
				'foto' => $namafoto,
				'review' => $review,
			];
			unlink("./uploads/produk/".$produk['foto']);
			$this->Produk_model->updateDataProduk($data);
			$this->session->set_flashdata('flash','Diubah');
			return redirect('admin/produk');
		}
	}
}