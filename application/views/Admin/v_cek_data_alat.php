<style type="text/css">
    #hr {
    bottom: 13px;
    position: relative;
    }
    #qr {
        z-index: 99;
    }
</style>
<?php if ($this->session->userdata('email')): ?>
    
<div class="nav">
    <div>
        <a href="<?= base_url('admin/scanQrAlat'); ?>" class="btn btn-dark" id="qr">SCAN QR</a>
    </div>
</div>

<?php endif ?>

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


        <div class="mb-5">
            <div class="text-center">
                <h4>DATA INVENTARIS ALAT</h4>
            </div>
        </div>



<div class="pl-5 pr-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="col" style="width: 50px;">No.</th>
        <th scope="col">Kode Alat</th>
        <th scope="col">Nama Alat</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tempat</th>
        <th scope="col">Spesifikasi</th>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">

<?php $inven = $this->db->get_where('tbl_data_alat',['f_kode_alat'=>$qr])->result_array(); ?>
<?php $a=0; ?>
<?php foreach ($inven as $inven): ?>
<?php $a++; ?>
    
      <tr class="border" id="row_soal">
        <td class="border">
            <span><?= $a; ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_kode_alat'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_nama_alat'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_jumlah'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_tempat'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_spesifikasi'] ?></span>
        </td>
      </tr>

<?php endforeach ?>

    </tbody>
  </table>
</div>