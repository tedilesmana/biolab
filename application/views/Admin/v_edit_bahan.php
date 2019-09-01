
<div class="container-fluid mb-3" style="" id="kop-sma">
    <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
            <img class="col-lg-11 col-sm-12" src="<?= base_url('assets/images/logo/kop.jpg') ?>" height="270" alt="" style="width:100%;">
        </div>
    </div>
</div>


        <div class="mb-5">
            <div class="text-center">
                <h4>FORM PENAMBAHAN DATA INVENTARIS</h4>
            </div>
        </div>

<form class="text-center" style="color: #757575;" action="" method="post">

<div class="pl-5 pr-5">
  <table class="table border">
    <thead class="black white-text text-center">
      <tr>
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
    <tbody  id="drag" class="dynamic dynamic_step" name="langkah" class="text-center">

    <tr class="border" id="row_soal">
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="kode_bahan" placeholder="<?= $bahan['f_kode_bahan']; ?>" value="<?= $bahan['f_kode_bahan']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="nama_bahan" placeholder="<?= $bahan['f_nama_bahan']; ?>" value="<?= $bahan['f_nama_bahan']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="jumlah" required placeholder="<?= $bahan['f_jumlah']; ?>" value="<?= $bahan['f_jumlah']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="tempat" required placeholder="<?= $bahan['f_tempat']; ?>" value="<?= $bahan['f_tempat']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="spesifikasi" required placeholder="<?= $bahan['f_spesifikasi']; ?>" value="<?= $bahan['f_spesifikasi']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="kategori" required placeholder="<?= $bahan['f_kategori']; ?>" value="<?= $bahan['f_kategori']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="kondisi" required placeholder="<?= $bahan['f_kondisi']; ?>" value="<?= $bahan['f_kondisi']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" name="kadaluarsa" required placeholder="<?= $bahan['f_kadaluarsa']; ?>" value="<?= $bahan['f_kadaluarsa']; ?>">
            </div>
        </td>
      </tr>

    </tbody>
  </table>
</div>
<div class="mb-5">
     <button class="btn btn-dark btn-rounded y-4 waves-effect z-depth-0" type="submit">Submit</button>
</div>
</form>


