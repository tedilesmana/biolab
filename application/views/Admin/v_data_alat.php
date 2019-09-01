<style type="text/css">
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


<div class="container-fluid mb-3" style="" id="kop-sma">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <img class="col-lg-11 col-sm-12" src="<?= base_url('assets/images/logo/kop.jpg') ?>" height="270" alt="" style="width:100%;">
        </div>
    </div>
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
        <th scope="col">Kategori</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tempat</th>
        <th scope="col">Spesifikasi</th>
        <?php if ($this->session->userdata('email')): ?>
        <th scope="col">Action</th>
        <?php endif ?>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">

<?php $inven = $this->db->get('tbl_data_alat')->result_array(); ?>
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
            <span><?= $inven['f_kategori'] ?></span>
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
        <?php if ($this->session->userdata('email')): ?>
        <td class="border">
            <a href="<?= base_url('admin/edit_alat/'.$inven['f_kode_alat']) ?>" class="btn-sm btn-info text-white font-weight-bold">EDIT</a>
            <a href="<?= base_url('admin/hapus_alat/'.$inven['f_kode_alat']) ?>" class="btn-sm btn-danger text-white font-weight-bold">HAPUS</a>
        </td>
        <?php endif ?>
      </tr>

<?php endforeach ?>

    </tbody>
  </table>
</div>