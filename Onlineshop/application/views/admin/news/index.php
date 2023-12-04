<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Daftar News</h1>

	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddNews">
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

    <?php foreach($news as $news) :?>
    <div class="card mb-3 mt-3">
        <div class="row g-0">
            <div class="col-md-3 col-3" style="max-width:200px">
                <img src="<?= base_url('uploads/news/'.$news['foto']);?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-9 col-9">
                <div class="card-body">
                    <h5 class="card-title"><?= $news['judul'] ?></h5>
                    <p class="card-text"><?= $news['isi'] ?></p>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted"><?= date('d M Y - H:i',strtotime($news['created_at'])) ?></small></p>
                    <a href="<?= base_url('news/edit/'.$news['id']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('news/hapus/'.$news['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin akan dihapus ?')"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>


<!-- Modal -->
<div class="modal fade" id="modalAddNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<form action="<?= base_url('news/addNews'); ?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah News</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<label class="mt-2">Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>

					<label class="mt-2">Isi</label>
					<textarea name="isi" class="form-control" cols="5" rows="5" placeholder="Masukkan Isi" required></textarea>

					<label class="mt-2">File</label>
					<input type="file" name="foto" class="form-control" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
