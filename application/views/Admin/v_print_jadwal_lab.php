<?php function konversi_tanggal($format, $tanggal="now", $bahasa="id"){

 $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
 "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
 
 $id=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
 "Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September",
 "Oktober","Nopember","Desember");

 return str_replace($en,$$bahasa,date($format,strtotime($tanggal)));
}
 ?>

<button id="btnPrintArea" class="btn btn-success">Print Area</button>
   

<div id="printArea" class="col-12">

<div class="container-fluid mb-3" style="" id="kop-sma">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <img class="col-lg-11 col-sm-12" src="<?= base_url('assets/images/logo/kop.jpg') ?>" height="270" alt="" style="width:100%;">
        </div>
    </div>
</div>


        <div class="mb-5">
            <div class="text-center">
                <h4>JADWAL LABORATORIUM BIOLOGI</h4>
            </div>
        </div>



<div class="pl-5 pr-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="col" style="width: 150px;">Jam Ke-</th>
        <?php
        $this->db->limit(5); 
        $this->db->order_by('f_tgl_terjadwal', 'ASC');
        $jwl = $this->db->get_where('tbl_jadwal_lab',['f_status'=>'konfirmed'])->result_array() 
        ?>
        <?php foreach ($jwl as $jwl): ?>
        
            <th scope="col"><?= konversi_tanggal("D",$jwl['f_tgl_terjadwal']) ?>, <?= $jwl['f_tgl_terjadwal'] ?></th>
            
        <?php endforeach ?>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">

 <?php $a=0; ?>
 <?php while($a<9): ?>
    <?php $a++; ?>

    <tr class="border" id="row_soal">
        <td class="border">
            <span>JAM KE-<?= $a; ?></span>
        </td>

        <?php
        $this->db->limit(5); 
        $this->db->order_by('f_tgl_terjadwal', 'ASC');
        $jwl = $this->db->get_where('tbl_jadwal_lab',['f_status'=>'konfirmed'])->result_array() 
        ?>

<?php foreach ($jwl as $jwl): ?>
    <?php $jw = $this->db->get_where('tbl_jadwal',['f_tgl_jadwal'=>$jwl['f_tgl_terjadwal'],'f_jam_ke'=>$a]); ?>

        <?php if ($jw->num_rows()>0): ?>
            <?php $jw2 = $jw->row_array(); ?>
            <td class="border"><?= $jw2['f_kelas']; ?></td>
        <?php endif ?>

        <?php if ($jw->num_rows()<1): ?>
            <td class="border">KOSONG</td>
        <?php endif ?>

<?php endforeach ?>


    </tr>

 <?php endwhile; ?>

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

 });
 </script>