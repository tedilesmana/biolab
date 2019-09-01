<style type="text/css">
	.font-nav a {
		font-size: 14px;
	}
</style>
<?php 

$data = $this->db->get_where('tbl_pesan',['f_status'=>0])->result_array();

 ?>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-secondary pt-2 pb-2">
	<div class="nav">
		<h1 class="font-weight-bold text-white">BIO</h1>
		<span class="font-weight-bold font-italic mt-2 text-white" style="font-size: 24px;">LAB-36</span>
	</div>
	<div class="ml-auto" id="">
		<a class="nav-link btn-sm pl-3 pr-4 btn-white text-dark align-content-end" href="<?= base_url('auth/logout'); ?>">
			<i class="fa fa-fw fa-sign-out-alt mr-2"></i>LOGOUT
		</a>
	</div>
</nav>


    
<nav class="mb-1 navbar navbar-expand-lg ">
	<a class="navbar-brand" href="<?= base_url('admin'); ?>" style="font-size: 14px;"><i class="fa fa-home mr-2"></i>Home</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-list"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/print_jadwal_lab'); ?>" style="font-size: 14px;">
					<i class="fa fa-fw fa-print text-info mr-3"></i>Print Jadwal Lab
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/print_data_inventaris'); ?>" style="font-size: 14px;">
					<i class="fa fa-fw fa-print text-info mr-3"></i>Print Data Inventaris
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin/pesan'); ?>" style="font-size: 14px;">
					<i class="fa fa-fw fa-envelope text-info mr-3"><span class="small btn-danger p-1 rounded-circle" style="bottom: 10px;position: relative;"><?php echo count($data); ?></span></i>Pesan
				</a>
			</li>
			<li class="nav-item rounded">
				<a class="nav-link" href="<?= base_url('admin/permintaan_penggunaan_lab'); ?>" style="font-size: 14px;">
					<i class="fa fa-fw fa-bell text-info mr-3"></i>Permintaan Penggunaan Lab
				</a>
			</li>
			<li class="nav-item rounded">
				<a class="nav-link" href="<?= base_url('admin/gallery'); ?>" style="font-size: 14px;">
					<i class="fa fa-fw fa-image mr-2"></i>Gallery
				</a>
			</li>
			<li class="nav-item dropdown" id="dropdown-menu">


				<a class="nav-link dropdown-toggle text-info" id="" data-toggle="dropdown" style="font-size: 14px;">
					<i class="fa fa-fw fa-calendar mr-2"></i>Fasilitas Lab
				</a>

				<div class="dropdown-menu mt-2 pl-2 pr-2 mr-auto dropdown-menu-left">
					<a class="dropdown-item" href="<?= base_url('admin/data_alat'); ?>" style="font-size: 14px;">Inventaris Alat</a>
					<a class="dropdown-item" href="<?= base_url('admin/data_bahan'); ?>" style="font-size: 14px;">Inventaris bahan</a>
					<a class="dropdown-item" href="<?= base_url('admin/tambah_data_alat'); ?>" style="font-size: 14px;">Tambahkan Data Alat</a>
					<a class="dropdown-item" href="<?= base_url('admin/tambah_data_bahan'); ?>" style="font-size: 14px;">Tambahkan Data Bahan</a>
					<a class="dropdown-item" href="<?= base_url('admin/jadwal_lab'); ?>" style="font-size: 14px;">Jadwal Penggunaan Lab</a>
				</div>


			</li>
		</ul>
	</div>
</nav>

<!-- <div class="card">
    <div class="card-body pt-5 bg-success col-12 text-center">
    	<div class="row">
    		<div class="col-12">
		    	<div class="">
		    		<h1 class="font-weight-bold">LAB BIOLOGI</h1>
		    	</div>
		    	<div class="" style="border-bottom: 1px solid black;">
		    		<h3>SMA NEGERI 36 JAKARTA</h3>
		    	</div>
		    	<div class="">
		    		<p>
		    			JL. PERHUBUNGAN RAYA RAWAMANGUN, Jati, Kec. Pulo Gadung, Kota Jakarta Timur Prov. D.K.I. Jakarta
		    		</p>
		    	</div>
    		</div>
    	</div>
    </div>
</div> -->