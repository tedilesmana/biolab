<?php $jadwal = $this->db->get('tbl_jadwal_lab')->result_array(); ?>










<div class="pl-5 pr-5 mt-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="col" style="width: 150px;">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Judul Praktik</th>
        <th scope="col">Tanggal Peminjaman</th>
        <th scope="col">Tanggal Pengembalian</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">
      <tr class="border" id="row_soal">


<?php foreach ($jadwal as $jwl): ?>
		<tr class="border" id="row_soal">
	        <td class="border">
	            <span><?= $jwl['f_nama'] ?></span>
	        </td>
	        <td class="border">
	            <span><?= $jwl['f_kelas'] ?></span>
	        </td>
	        <td class="border">
	            <span><?= $jwl['f_judul_praktik'] ?></span>
	        </td>
	        <td class="border">
	        	<?php if (strlen($jwl['f_tgl_pinjam'])<5): ?>
	           		 <span><a href="<?= base_url('admin/konfirmasi_peminjaman/').$jwl['f_id_pengajuan'] ?>" class="btn-sm btn-info text-white">KONFIRMASI PEMINJAMAN</a></span>
	        	<?php endif ?>
	        	<?php if (strlen($jwl['f_tgl_pinjam'])>5): ?>
	           		 <span><?= $jwl['f_tgl_pinjam']  ?></span>
	        	<?php endif ?>
	        </td>
	        <td class="border">

	        	<?php if (strlen($jwl['f_tgl_kembali'])<5): ?>
	            	<span><a href="<?= base_url('admin/konfirmasi_pengembalian/').$jwl['f_id_pengajuan'] ?>" class="btn-sm btn-info text-white">KONFIRMASI PENGEMBALIAN</a></span>
	            <?php endif ?>

	        	<?php if (strlen($jwl['f_tgl_kembali'])>5): ?>
	           		 <span><?= $jwl['f_tgl_kembali']  ?></span>
	            <?php endif ?>

	        </td>

	        <td class="border">
	            <span><a href="<?= base_url('admin/detail_permintaan/').$jwl['f_id_pengajuan'] ?>" class="btn-sm btn-primary text-white">Detail</a></span>
	        </td>
     	</tr>
<?php endforeach; ?>


    </tbody>
  </table>
</div>

