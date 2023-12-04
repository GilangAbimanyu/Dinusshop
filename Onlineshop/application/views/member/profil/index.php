<div class="content mt-4">
	<h1 class="text-center">Profil Member</h1>

	<div class="container">
		<div class="card mb-3">
			<div class="row g-0">
				<div class="col-md-4 col-4">
                    <?php if($member['foto'] != null) :?>
                        <img src="<?= base_url('uploads/profil/'.$member['foto']) ?>" class="img-fluid rounded-start rounded"
                            alt="...">
                    <?php else :?>
                        <img src="<?= base_url('assets/logo/img_avatar.png') ?>" class="img-fluid rounded-start rounded"
                            alt="...">
                    <?php endif;?>
					<div class="d-grid gap-2">
						<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditFoto"><i
								class="fas fa-upload"></i> Ubah Foto</button>
					</div>
				</div>
				<div class="col-md-8 col-sm-8">
					<div class="card-body">
						<table class="table table-borderless">
							<tr>
								<td>Nama Lengkap</td>
								<td>:</td>
								<td><?= $member['nama'] ?></td>
							</tr>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td><?= $member['username'] ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?= $member['email'] ?></td>
							</tr>
							<tr>
								<td>No Tlp</td>
								<td>:</td>
								<td><?= $member['nomor'] ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td><?= $member['alamat'] ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal Edit Foto -->
<div class="modal fade" id="modalEditFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <form action="<?= base_url('home/updateProfil'); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
	</div>
</div>
