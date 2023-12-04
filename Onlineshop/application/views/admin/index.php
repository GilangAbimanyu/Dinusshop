<div class="container-fluid px-4">
	<h1 class="mt-4 mb-3">Dashboard</h1>
	<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card text-white mb-4" style="background-image: linear-gradient(to right, red , yellow);">
				<div class="card-body">Total Member</div>
				<div class="card-body">
					<h1><?= $member ?></h1>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card text-white mb-4" style="background-image: linear-gradient(to right, blue , aqua);">
				<div class="card-body">Total Produk</div>
				<div class="card-body">
					<h1><?= $produk ?></h1>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card text-white mb-4" style="background-image: linear-gradient(to right, blue , pink);">
				<div class="card-body">Total Transaksi</div>
				<div class="card-body">
					<h1><?= $transaksi ?></h1>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card text-white mb-4" style="background-image: linear-gradient(to right, red , white);">
				<div class="card-body">Total News</div>
				<div class="card-body">
					<h1><?= $news ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
