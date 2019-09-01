 <link rel="stylesheet" href="<?= base_url('assets/jquery-ui/') ?>jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('assets/jquery-ui/') ?>jquery-ui.theme.css">
  <script src="<?= base_url('assets/jquery-ui/') ?>jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>


<style type="text/css">
	#hr {
	bottom: 13px;
	position: relative;
	}
</style>

<div class="container-fluid p-5" style="position: relative;right: 30px;" id="kop-sma">
	<div class="row mb-5">
		<div class="col-3">
			<img class="float-right" src="<?= base_url('assets/images/logo/logo2.png') ?>" height="150" alt="">
		</div>
		<div class="col-9 text-center">
			<h5>PEMERINTAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA DINAS PENDIDIKAN</h5>
			<h3>SEKOLAH MENENGAH ATAS NEGERI 36</h3>
			<span>Jl. Perhubungan Raya, Rawamangun Jakarta Timur Tlp. 4893358 Fax. (021) 47864229 </span><br>
			<span>E.Mail : sma36jakarta@gmail Website : www.sma36.sch.id</span><br>	
			<span>JAKARTA TIMUR 13220</span>
		</div>
	</div>
		<hr color="black" style="height: 3px;" width="90%" align="right">
		<hr color="black" style="height: 1px;" width="90%" align="right" id="hr">
</div>

<div class="container">
	<div style="margin-left: 20px;">
		<div class="mb-5">
			<div class="text-center">
				<h4>FORM PENGAJUAN PEMINJAMAN LAB</h4>
			</div>
		</div>
		<div class="">







			<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>DATA PENGAJUAN</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

<?php foreach ($jadwal as $jadwal): ?>

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" placeholder="Nama : <?= $jadwal['f_nama'] ?>" disabled="">
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="email" id="materialRegisterFormLastName" class="form-control" placeholder="Kelas : <?= $jadwal['f_kelas'] ?>" disabled="">
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="form-row">
                <div class="md-form col-6">
                    <input type="text" id="" class="form-control" placeholder="Judul Praktik : <?= $jadwal['f_judul_praktik'] ?>" disabled="">
                </div>
            </div>
			
			<div class="form-row">
                    <!-- First name -->
                    <div class="md-form col-6">
				        <input type="text"  id="datepicker" class="form-control" placeholder="Tanggal Penggunaan Lab : <?= $jadwal['f_tgl_pengajuan']  ?>" name="tgl_penutupan" disabled="">
				    </div>
            </div>

		   
            <!-- Phone number -->
            <div class="form-row">
                <div class="md-form col-6">
                    <input type="text" id="" class="form-control" aria-describedby="" placeholder="Nomor Handphone : <?= $jadwal['f_no_hp'] ?>" disabled="">
                </div>
            </div>


    </div>

</div>

    
<?php endforeach ?>
<!-- Material form register -->

<div class="card mt-5">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>DATA ALAT DAN BAHAN DI BUTUHKAN</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">


   <table class="table mt-5 border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="">Nama Alat dan Bahan</th>
        <th scope="" style="width: 200px;" class="">Jumlah</th>
      </tr>
    </thead>
    <tbody id="drag" class="dynamic dynamic_step" name="langkah">


<?php foreach ($alat as $alat): ?>
    
		<tr class="border" id="row_soal">
        <td class="border">
            <div class="">
                <?= $alat['f_nama_alat_bahan'] ?>
            </div>
		</td>
        <td class="border">
            <div class="">
                <?= $alat['f_jumlah'] ?>
            </div>
		</td>
      </tr>

<?php endforeach ?>


    </tbody>
  </table>

    </div>

</div>
<form action="" method="post">
<div class="col-3">
    <!-- First  -->
    <div class="md-form mt-5">
        <input type="text"  id="datepicker2" class="form-control" placeholder="Cek Jadwal Pada Tanggal" name="cari" required="">
        <button type="submit">CEK</button>
    </div>
</div>
</form>

<form action="" method="post">
<div class="card mt-5">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>CEK JADWAL KOSONG</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">



   <table class="table mt-5 border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="">Senin, 19-08-19</th>
        <th scope="">Jadwal</th>
        <th scope="" style="width: 200px;" class="">Buatkan Jadwal Di Jam Ini</th>
      </tr>
    </thead>
    <tbody id="drag" class="dynamic dynamic_step text-center" name="langkah">

<?php if ($_POST): ?>
<input hidden="" type="text" name="tgl" value="<?= $cari; ?>">

	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-1
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>1,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>

        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>1,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[1]" id="1" value="1">
                <label class="custom-control-label" for="1">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-2
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>2,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
        </td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>2,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[2]" id="2" value="2">
                <label class="custom-control-label" for="2">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-3
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>3,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>3,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[3]" id="3" value="3">
                <label class="custom-control-label" for="3">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-4
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>4,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>4,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[4]" id="4" value="4">
                <label class="custom-control-label" for="4">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-5
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>5,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>5,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[5]" id="5" value="5">
                <label class="custom-control-label" for="5">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-6
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>6,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>6,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[6]" id="6" value="6">
                <label class="custom-control-label" for="6">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-7
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>7,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>7,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[7]" id="7" value="7">
                <label class="custom-control-label" for="7">Check</label>
            </div></a>
            </div>
            <?php endif ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-8
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>8,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>8,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[8]" id="8" value="8">
                <label class="custom-control-label" for="8">Check</label>
            </div></a>
            </div>
            <?php endif; ?>
        </td>
    </tr>
	<tr class="border" id="row_soal">
        <td class="border">
            <div class="md-form">JAM KE-9
            </div>
		</td>
        <td class="border">
            <div class="md-form">
                <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>9,'f_tgl_jadwal'=>$cari])->row_array(); ?> 
                <?php if ($row>0): ?>
                        <div><?= $row['f_kelas'] ?></div>
                <?php else: ?>
                    <div class="btn-warning">KOSONG</div>
                <?php endif ?>
            </div>
		</td>
        <td class="border">
            <?php $row = $this->db->get_where('tbl_jadwal',['f_jam_ke'=>9,'f_tgl_jadwal'=>$cari])->num_rows(); ?> 
            <?php if ($row==0): ?>
            <div class="">
            <a class="btn btn-success text-white">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input mt-2" name="jam[9]" id="9" value="9">
                <label class="custom-control-label" for="9">Check</label>
            </div></a>
            </div>
            <?php endif; ?>
        </td>
    </tr>
<?php endif ?>

    </tbody>
  </table>

    </div>

</div>
<div class="col-12 text-center">
<button class="btn btn-info btn-rounded mt-5 my-4 waves-effect z-depth-0" type="submit">Buatkan Jadwal Baru</button>
</div>

</form>
<!-- Form -->















		</div>
	</div>
</div><br><br><br>




