<style type="text/css">
	.font-nav a {
		font-size: 14px;
	}
</style>

<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-secondary pt-2 pb-2">
	<div class="nav">
		<h1 class="font-weight-bold text-white">BIO</h1>
		<span class="font-weight-bold font-italic mt-2 text-white" style="font-size: 24px;">LAB-36</span>
	</div>
	<div class="ml-auto" id="">
		<a class="nav-link btn-sm pl-3 pr-4 btn-white text-dark align-content-end" href="<?= base_url('home/login'); ?>">
			<i class="fa fa-fw fa-sign-in-alt mr-2"></i>LOGIN
		</a>
	</div>
</nav>


    
<nav class="mb-1 navbar navbar-expand-lg" id="font-nav">
	<a class="" href="<?= base_url('home'); ?>"><i class="fa fa-home mr-2"></i>Home</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fa fa-list" style="font-size: 28px;"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('home/contact'); ?>">
					<i class="fa fa-fw fa-phone mr-2"></i>Contact
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('home/profile'); ?>">
					<i class="fa fa-fw fa-user mr-2"></i>Profile
				</a>
			</li>
			<li class="nav-item rounded">
				<a class="nav-link" href="<?= base_url('home/tata_tertib'); ?>">
					<i class="fa fa-fw fa-bullhorn mr-2"></i>Tata Tertib
				</a>
			</li>
			<li class="nav-item rounded">
				<a class="nav-link" href="<?= base_url('home/gallery'); ?>">
					<i class="fa fa-fw fa-image mr-2"></i>Gallery
				</a>
			</li>
			<li class="nav-item dropdown" id="dropdown-menu">


				<a class="nav-link dropdown-toggle text-info" id="" data-toggle="dropdown">
					<i class="fa fa-fw fa-calendar mr-2"></i>Fasilitas Lab
				</a>

				<div class="dropdown-menu mt-2 pl-2 pr-2 mr-auto dropdown-menu-left">
					<a class="dropdown-item" href="<?= base_url('home/data_alat'); ?>" style="font-size: 14px;">Inventaris Alat</a>
					<a class="dropdown-item" href="<?= base_url('home/data_bahan'); ?>" style="font-size: 14px;">Inventaris bahan</a>
					<a class="dropdown-item" href="<?= base_url('home/pengajuan_jadwal_lab'); ?>">Pengajuan Jadwal Lab</a>
					<a class="dropdown-item" href="<?= base_url('home/jadwal_lab'); ?>">Jadwal Lab</a>
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