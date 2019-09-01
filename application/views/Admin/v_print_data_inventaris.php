<style type="text/css">
    #qr {
        z-index: 99;
    }
</style>

<button id="btnPrintArea0" class="btn btn-outline-dark">Print Data Alat</button>
<button id="btnPrintArea" class="btn btn-outline-dark">Print Data Bahan</button>

<div id="printArea0" class="col-12">

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
        <th scope="col">Jumlah</th>
        <th scope="col">Tempat</th>
        <th scope="col">Spesifikasi</th>
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
</div>




   

<div id="printArea" class="col-12">


<div class="container-fluid mb-3 mt-5 pt-5" style="" id="kop-sma">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <img class="col-lg-11 col-sm-12" src="<?= base_url('assets/images/logo/kop.jpg') ?>" height="270" alt="" style="width:100%;">
        </div>
    </div>
</div>
        <div class="mb-5">
            <div class="text-center">
                <h4>DATA INVENTARIS BAHAN</h4>
            </div>
        </div>



<div class="pl-5 pr-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="col" style="width: 50px;">No.</th>
        <th scope="col">Kode Bahan</th>
        <th scope="col">Nama Bahan</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tempat</th>
        <th scope="col">Spesifikasi</th>
        <th scope="col">Kategori</th>
        <th scope="col">Kondisi</th>
        <th scope="col">Kadaluarsa</th>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">

<?php $inven = $this->db->get('tbl_data_bahan')->result_array(); ?>
<?php $a=0; ?>
<?php foreach ($inven as $inven): ?>
<?php $a++; ?>
    
      <tr class="border" id="row_soal">
        <td class="border">
            <span><?= $a; ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_kode_bahan'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_nama_bahan'] ?></span>
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
        <td class="border">
            <span><?= $inven['f_kategori'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_kondisi'] ?></span>
        </td>
        <td class="border">
            <span><?= $inven['f_kadaluarsa'] ?></span>
        </td>
      </tr>

<?php endforeach ?>

    </tbody>
  </table>
</div>
</div>
<script src="<?= base_url('assets/printThis.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
 <script>
 $(document).ready(function(){

     $("#btnPrintArea").click(function(){
     $('#printArea').printThis(); //Untuk Print Area tertentu bisa menggunakan code ini
     });

     $("#btnPrintArea0").click(function(){
     $('#printArea0').printThis(); //Untuk Print Area tertentu bisa menggunakan code ini
     });

 });
 </script>