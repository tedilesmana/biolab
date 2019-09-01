<?php $pesan = $this->db->get('tbl_pesan')->result_array(); ?>










<div class="pl-5 pr-5 mt-5 mb-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
        <th scope="col" style="width: 150px;">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Subjek</th>
        <th scope="col">pesan</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="drag" class="text-center" name="langkah">
      <tr class="border" id="row_soal">


<?php foreach ($pesan as $ps): ?>
		<tr class="border" id="row_soal">
	        <td class="border">
	            <span><?= $ps['f_nama'] ?></span>
	        </td>
	        <td class="border">
	            <span><?= $ps['f_email'] ?></span>
	        </td>
	        <td class="border">
	            <span><?= $ps['f_subjek'] ?></span>
	        </td>
	        <td class="border">
	            <span><?= $ps['f_pesan'] ?></span>
	        </td>
	        <td class="border">
	            <span><?= $ps['f_date'] ?></span>
	        </td>
	        <?php if ($ps['f_status']==0): ?>
	        <td class="border">
	            <span><a href="<?= base_url('admin/lihat_pesan/').$ps['f_id_pesan'] ?>" class="btn-sm btn-warning text-white">Baca</a></span>
	        </td>
	        <?php endif ?>
	        <?php if ($ps['f_status']==1): ?>
	        <td class="border">
	            <span><a href="<?= base_url('admin/lihat_pesan/').$ps['f_id_pesan'] ?>" class="btn-sm btn-info text-white">Baca</a></span>
	        </td>
	        <?php endif ?>
     	</tr>
<?php endforeach; ?>


    </tbody>
  </table>
</div>

