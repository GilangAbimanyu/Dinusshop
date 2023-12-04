<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Daftar Produk</h1>

	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		<i class="fas fa-plus"></i>
		Tambah Data
	</button>

	<!-- ALERT FLASHDATA  -->
	<?php if($this->session->flashdata()) :?>
	<div class="container">
		<div class="row mt-2">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Berhasil</strong> <?= $this->session->flashdata('flash')?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
	<?php endif;?>
	<!-- END FLASHDATA -->

	<div class="container">
		<div class="row p-2 mt-3">
			<?php foreach($produk as $prod) { ?>
			<div class="col-md-3 col-6 d-flex align-self-stretch">
				<div class="card rounded shadow border mb-2 w-100 px-2 pt-2">
					<img src="<?= base_url('uploads/produk/'.$prod['foto'])?>" class="card-img-top" alt="..." width="100"
						height="230">
					<div class="card-body text-center">
						<h6 class="card-title"><?= $prod['nama_produk']; ?> </h6>
						<h4 class="card-title text-success">Rp <?= number_format($prod['harga']); ?></h4>
						<a href="<?= base_url('admin/editProduk/'.$prod['produk_id'])?>" class="btn btn-primary"><i
								class="fas fa-edit"></i></a>
						<a href="<?= base_url('admin/hapusProduk/'.$prod['produk_id'])?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin akan dihapus ?')"><i
								class="fas fa-trash-alt"></i></a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('admin/postProduk')?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<label class="mt-2">Nama Produk :</label>
					<input class="form-control" type="text" name="nama_produk">
                    
					<label class="mt-2">Nama Brands :</label>
                    <select name="brands_id" class="form-control">
                        <?php foreach($brands as $b) :?>
                            <option value="<?= $b->id ?>"><?= $b->nama_brands ?></option>
                        <?php endforeach;?>
                    </select>

					<label class="mt-2">Harga :</label>
					<input class="form-control" type="number" name="harga">

					<label class="mt-2">Stok :</label>
					<input class="form-control" type="number" name="stok">

					<label class="mt-2">Foto :</label>
					<input class="form-control" type="file" name="foto">

					<label class="mt-2">Deskripsi :</label>
                    <textarea name="deskripsi" class="form-control" cols="5" rows="5"></textarea>

					<label class="mt-2">Link Review :</label>
                    <textarea name="review" class="form-control" cols="3" rows="3"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
