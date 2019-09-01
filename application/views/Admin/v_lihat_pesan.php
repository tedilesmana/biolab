<div class="containe p-5">
	<div class="card">
		<div class="card-header bg-dark text-white pt-4 text-uppercase">
			<h5 class="font-weight-bold">Subjek : <?= $pesan['f_subjek'] ?></h5>
		</div>
		<div class="card-body">
			<div class="mb-2">Nama Pengirim : <?= $pesan['f_nama'] ?></div>
			<div class="border-bottom">Email : <?= $pesan['f_email'] ?></div>
			<div class="p-4 mt-3 card">
				<p><?= $pesan['f_pesan'] ?></p>
			</div>
		</div>
		<div class="card-footer bg-dark">
			<div class="float-right text-white"><?= $pesan['f_date'] ?></div>
		</div>
	</div>
</div>