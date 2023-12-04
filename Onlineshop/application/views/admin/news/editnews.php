<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Edit News</h1>

	<div class="card col-md-6">
		<div class="card-body">
			<form action="<?=base_url('news/updateNews')?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$news['id'] ?>">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Judul</label>
					<input type="text" class="form-control" name="judul" value="<?=$news['judul'] ?>" required>
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Isi</label>
                    <textarea name="isi" class="form-control" cols="5" rows="5" required><?=$news['isi'] ?></textarea>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Foto</label>
					<input type="file" class="form-control" name="foto" value="">
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
