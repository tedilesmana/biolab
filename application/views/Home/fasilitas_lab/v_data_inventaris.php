<style type="text/css">
    #qr {
        z-index: 99;
    }
</style>

<div class="nav">
    <div>
        <a href="<?= base_url('admin/scanQr'); ?>" class="btn btn-dark" id="qr">SCAN QR</a>
    </div>
</div>


<div class="container-fluid mb-3" style="" id="kop-sma">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <img class="col-lg-11 col-sm-12" src="<?= base_url('assets/images/logo/kop.jpg') ?>" height="270" alt="" style="width:100%;">
        </div>
    </div>
</div>



        <div class="mb-5">
            <div class="text-center">
                <h4>DATA INVENTARIS</h4>
            </div>
        </div>



<div class="pl-5 pr-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="col" style="width: 50px;">No.</th>
        <th scope="col">Nama Alat & Bahan</th>
        <th scope="col">Ukuran/<br>Sepesifikasi</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Satuan</th>
        <th scope="col">Kondisi</th>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">

<?php $inven = $this->db->get('tbl_data_inventaris')->result_array(); ?>
<?php $a=0; ?>
<?php foreach ($inven as $inven): ?>
<?php $a++; ?>
    
      <tr class="border" id="row_soal">
        <td class="border">
            <span><?= $a; ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_nama_ab'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_ukuran'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_jumlah'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_satuan'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_kondisi'] ?></span>
        </td>
      </tr>

<?php endforeach ?>

    </tbody>
  </table>
</div>