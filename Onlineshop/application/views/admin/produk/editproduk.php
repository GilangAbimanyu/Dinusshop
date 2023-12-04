<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Edit Produk</h1>

	<div class="card col-md-6">
		<div class="card-body">
			<form action="<?=base_url('admin/updateProduk')?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $produk['produk_id']?>">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Nama Produk</label>
					<input type="text" class="form-control" name="nama_produk" value="<?= $produk['nama_produk'] ?>">
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Brands</label>
                    <select name="brands_id" class="form-control">
                        <?php foreach($brands as $b) :?>
                            <?php if($b->id == $produk['brands_id']) :?>
                                <option value="<?=$b->id ?>" selected><?=$b->nama_brands ?></option>
                            <?php else :?>
                                <option value="<?=$b->id ?>"><?=$b->nama_brands ?></option>
                            <?php endif;?>
                        <?php endforeach;?>
                    </select>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Harga</label>
					<input type="number" class="form-control" name="harga" value="<?= $produk['harga']?>">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Stok</label>
					<input type="number" class="form-control" name="stok" value="<?= $produk['stok']?>">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" cols="5" rows="5"><?= $produk['deskripsi'] ?></textarea>
				</div>
				<div class="mb-3">
					<label class="mt-2">Link Review :</label>
                    <textarea name="review" class="form-control" cols="3" rows="3"><?=$produk['review'] ?></textarea>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Foto</label>
					<input type="file" class="form-control" name="foto">
				</div>
                <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
