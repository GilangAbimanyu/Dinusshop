<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Daftar Brands</h1>

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
			<?php foreach($brands as $b) { ?>
			<div class="col-md-3 col-6 d-flex align-self-stretch">
				<div class="card rounded shadow border mb-2 w-100 px-2 pt-2">
					<img src="<?= base_url('uploads/'.$b->logo)?>" class="card-img-top" alt="..." width="100"
						height="150">
					<div class="card-body text-center">
						<h5 class="card-title"><?= $b->nama_brands; ?> </h5>
						<a href="<?= base_url('admin/editBrands/'.$b->id)?>" class="btn btn-primary"><i
								class="fas fa-edit"></i></a>
						<a href="<?= base_url('admin/hapusBrands/'.$b->id)?>" class="btn btn-danger" onclick="return confirm('Apakah Yakin akan dihapus ?')"><i
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
				<h5 class="modal-title" id="exampleModalLabel">Form Input Brands</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('admin/postBrands')?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<label class="mt-2">Nama Brands :</label>
					<input class="form-control" type="text" name="nama_brands">

					<label class="mt-2">Foto Brands :</label>
					<input class="form-control" type="file" name="logo">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
