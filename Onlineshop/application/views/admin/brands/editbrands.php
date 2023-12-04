<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Edit Brands</h1>

	<div class="card col-md-6">
		<div class="card-body">
			<form action="<?=base_url('admin/updateBrands')?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $brands['id']?>">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Nama Brands</label>
					<input type="text" class="form-control" name="nama_brands" value="<?= $brands['nama_brands'] ?>">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Foto Logo</label>
					<input type="file" class="form-control" name="logo">
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
