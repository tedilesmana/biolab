
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
        <th scope="col">Kode Alat</th>
        <th scope="col">Nama Alat</th>
        <th scope="col">Kategori</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tempat</th>
        <th scope="col">Spesifikasi</th>
      </tr>
    </thead>
    <tbody  id="drag" class="dynamic dynamic_step" name="langkah" class="text-center">
      <tr class="border" id="row_soal">
            <tr class="border'+i+'" id="row_soal">
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" value="<?= $alat['f_kode_alat']; ?>" name="kode_alat" placeholder="<?= $alat['f_kode_alat']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" value="<?= $alat['f_nama_alat']; ?>" name="nama_alat" placeholder="<?= $alat['f_nama_alat']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" value="<?= $alat['f_kategori']; ?>" name="kategori" placeholder="<?= $alat['f_kategori']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" value="<?= $alat['f_jumlah']; ?>" name="jumlah" placeholder="<?= $alat['f_jumlah']; ?>" required>
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" value="<?= $alat['f_tempat']; ?>" name="tempat" required placeholder="<?= $alat['f_tempat']; ?>">
            </div>
        </td>
        <td>
            <div class="md-form mt-1">
                <input type="text" id="materialContactFormName" class="form-control" value="<?= $alat['f_spesifikasi']; ?>" name="spesifikasi" required placeholder="<?= $alat['f_spesifikasi']; ?>">
            </div>
        </td>
      </tr>
      </tr>
    </tbody>
  </table>
</div>
<div class="mb-5">
     <button class="btn btn-dark btn-rounded y-4 waves-effect z-depth-0" type="submit">Submit</button>
</div>
</form>


