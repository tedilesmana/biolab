  <link href="<?= base_url('assets/css/'); ?>home.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropify/dist/css/dropify.min.css')?>">
<?php $land = $this->db->get('tbl_landing')->result_array(); ?>
  <!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- HOME SECTION 1 -->
<?php foreach ($land as $land): ?>
  
<section class="container-fluid">
  <div class="row">
    <div class="col-lg-7 p-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                <div style="position: absolute; z-index: 99;">
                  <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fa fa-pen mr-2"></i>Edit</button>
                </div>
            <div class="carousel-inner" id="head-corousel">


              <div class="carousel-item active img">
                <img class="d-block w-100" src="<?= base_url('assets/landing/').$land['f_corousel_1']; ?>"
                  alt="First slide">
              </div>
              <div class="carousel-item img">
                <img class="d-block w-100" src="<?= base_url('assets/landing/').$land['f_corousel_2']; ?>"
                  alt="First slide">
              </div>
              <div class="carousel-item img">
                <img class="d-block w-100" src="<?= base_url('assets/landing/').$land['f_corousel_3']; ?>"
                  alt="First slide">
              </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="col-lg-5 mt-3 col-12">
      <div style="position: absolute; z-index: 99;">
                  <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl2"><i class="fa fa-pen mr-2"></i>Edit</button>
                </div>
      <div class="row">
          <div class="col-lg-5 col-5">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_art_gambar_1']; ?>" height="110" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-7">
            <div class="">
              <h6 class="font-weight-bold"><?= $land['f_art_judul_1']; ?></h6>
            </div>
            <div class="">
              <p2 class=""><?= $land['f_art_isi_1']; ?></p2>
            </div>
          </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-lg-5 col-5">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_art_gambar_2']; ?>" height="110" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-7">
            <div class="">
              <h6 class="font-weight-bold"><?= $land['f_art_judul_2']; ?></h6>
            </div>
            <div class="">
              <p2 class=""><?= $land['f_art_isi_2']; ?></p2>
            </div>
          </div>
      </div>
      <hr>
      <div class="row">
          <div class="col-lg-5 col-5">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_art_gambar_3']; ?>" height="110" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-7">
            <div class="">
              <h6 class="font-weight-bold"><?= $land['f_art_judul_3']; ?></h6>
            </div>
            <div class="">
              <p2 class=""><?= $land['f_art_isi_3']; ?></p2>
            </div>
          </div>
      </div>
      <hr>
    </div>
  </div>
</section>
<!-- HOME SECTION 1 -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->

<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- HOME SECTION 2 -->
<section class="container-fluid" style="height: 600px;background: url('<?= base_url('assets/landing/'.$land['f_mdl_background']) ?>');width: 100vw;background-size: cover;">
  <div class="">
    <div class="row">
      <div class="col-12 text-center mt-5">
        <h3 class="font-weight-bold text-white"><?= $land['f_mdl_header']; ?></h3>
        <hr color="white">
      </div>


        <div id="learning" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

<div class="ml-3" style="position: absolute; z-index: 99;">
  <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl3"><i class="fa fa-pen mr-2"></i>Edit</button>
</div>

              <div class="carousel-item active">
                <div class="offset-1 card bg-transparent col-10 p-5" style="margin-top: 50px;">
                  <div class="col-lg-8 col-12">
                    <h5 class="text-white mt-4"><?= $land['f_mdl_judul_1']; ?></h5>
                    <h2 class="font-weight-bold text-white"><?= $land['f_mdl_subjudul_1']; ?></h2>
                    <p class="text-white mb-3"><?= $land['f_mdl_isi_1']; ?></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="offset-1 card bg-transparent col-10 p-5" style="margin-top: 50px;">
                  <div class="col-8">
                    <h5 class="text-white mt-4"><?= $land['f_mdl_judul_2']; ?></h5>
                    <h2 class="font-weight-bold text-white"><?= $land['f_mdl_subjudul_2']; ?></h2>
                    <p class="text-white mb-3"><?= $land['f_mdl_isi_2']; ?></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="offset-1 card bg-transparent col-10 p-5" style="margin-top: 50px;">
                  <div class="col-8">
                    <h5 class="text-white mt-4"><?= $land['f_mdl_judul_3']; ?></h5>
                    <h2 class="font-weight-bold text-white"><?= $land['f_mdl_subjudul_3']; ?></h2>
                    <p class="text-white mb-3"><?= $land['f_mdl_isi_3']; ?></p>
                  </div>
                </div>
              </div>
              </div>


            <a class="carousel-control-prev mt-5" href="#learning" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next mt-5" href="#learning" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    </div>
  </div>
</section>

<!-- HOME SECTION 2 -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->

<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- HOME SECTION 3 -->
<section class="container mb-5" style="">
  <div class="">
    <div class="row">


        <div class="col-lg-8 col-12 p-5 mt-5 card">
<div style="position: absolute; z-index: 99;top: 0;left: 0;">
  <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl4"><i class="fa fa-pen mr-2"></i>Edit</button>
</div>
            <h5 class=" mt-4"><?= $land['f_foot_judul']; ?></h5>
            <h2 class="font-weight-bold "><?= $land['f_foot_subjudul']; ?></h2>
            <p class=" mb-3"><?= $land['f_foot_isi']; ?></p>
        </div>

        <div class="col-lg-4 col-12 text-center pl-5 mt-2 pt-4"> 
            <div class="mt-5"> 
                <h5 class="mt-5 font-weight-bold">Mau Bantu Kami?</h5>
                <p class="mt-4">Masukan saran dan masukan untuk mengoptimalkan kinerja web kami dengan klik tombol di bawah untuk mengirim pesan kepada kami</p>
                <a href="<?= base_url('home/contact') ?>" class="btn btn-success">Kirim Pesan</a>
            </div>
        </div>


    </div>
  </div>
</section>

<!-- HOME SECTION 3 -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->
<!-- ############################################################ -->






<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="card pt-3">
        <form enctype="multipart/form-data" method="post" action="<?= base_url('admin/edit_home') ?>">


      <div class="col-12 text-center mt-5">
          <h3 class="font-weight-bold text-uppercase">Edit Courosel 1</h3>
          <hr color="black">
          <br>
          <img src="<?php echo base_url('assets/landing/'.$land['f_corousel_1'])?>" alt="" height="200" style="position: relative;bottom: 97px;">
          <div class="custom-file" style="height: 100px;width: 390px;">
            <input type="file" class="dropify" id="gambar" name="corousel_1" value="">
            <label class="custom-file-label" for="customFile"><?= $land['f_corousel_1'] ?></label>
            <input type="text" value="<?= $land['f_corousel_1'] ?>" name="old1" hidden>
          </div>
      </div>


      <div class="col-12 text-center mt-5">
          <h3 class="font-weight-bold text-uppercase">Edit Courosel 2</h3>
          <hr color="black">
          <br>
          <img src="<?php echo base_url('assets/landing/'.$land['f_corousel_2'])?>" alt="" height="200" style="position: relative;bottom: 97px;">
          <div class="custom-file" style="height: 100px;width: 390px;">
            <input type="file" class="dropify" id="gambar" name="corousel_2" value="">
            <label class="custom-file-label" for="customFile"><?= $land['f_corousel_2'] ?></label>
            <input type="text" value="<?= $land['f_corousel_2'] ?>" name="old2" hidden>
          </div>
      </div>



      <div class="col-12 text-center mt-5">
          <h3 class="font-weight-bold text-uppercase">Edit Courosel 3</h3>
          <hr color="black">
          <br>
          <img src="<?php echo base_url('assets/landing/'.$land['f_corousel_3'])?>" alt="" height="200" style="position: relative;bottom: 97px;">
          <div class="custom-file" style="height: 100px;width: 390px;">
            <input type="file" class="dropify" id="gambar" name="corousel_3" value="">
            <label class="custom-file-label" for="customFile"><?= $land['f_corousel_3'] ?></label>
            <input type="text" value="<?= $land['f_corousel_3'] ?>" name="old3" hidden>
          </div>
      </div>


          <div class="text-center" style="position: relative;bottom: 50px;">
            <button class="btn btn-success">submit</button>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>









<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="card pt-3">
        <form enctype="multipart/form-data" method="post" action="<?= base_url('admin/edit_home_art') ?>">



   <div class="col-lg-12 mt-3 col-12">
      <div class="row">



          <div class="col-3">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_art_gambar_1']; ?>" height="150" alt="">
            </div>
          </div>
          <div class="col-5 text-center">
            <div class="custom-file" style="height: 100px;width: 390px;">
              <input type="file" class="dropify" id="gambar" name="art_1" value="">
              <label class="custom-file-label" for="customFile"><?= $land['f_art_gambar_1'] ?></label>
              <input type="text" value="<?= $land['f_art_gambar_1'] ?>" name="old1" hidden>
            </div>
          </div>
          <div class="col-4">
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_art_judul_1']; ?>" placeholder="<?= $land['f_art_judul_1']; ?>" name="art_judul_1">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="art_isi_1" value="" placeholder="<?= $land['f_art_isi_1']; ?>"><?= $land['f_art_isi_1']; ?></textarea>
            </div>
          </div>


      </div>
    </div>
      <hr>



   <div class="col-lg-12 mt-3 col-12">
      <div class="row">



          <div class="col-3">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_art_gambar_2']; ?>" height="150" alt="">
            </div>
          </div>
          <div class="col-5 text-center">
            <div class="custom-file" style="height: 100px;width: 390px;">
              <input type="file" class="dropify" id="gambar" name="art_2" value="">
              <label class="custom-file-label" for="customFile"><?= $land['f_art_gambar_2'] ?></label>
              <input type="text" value="<?= $land['f_art_gambar_2'] ?>" name="old2" hidden>
            </div>
          </div>
          <div class="col-4">
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_art_judul_2']; ?>" placeholder="<?= $land['f_art_judul_2']; ?>" name="art_judul_2">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="art_isi_2" value="" placeholder="<?= $land['f_art_isi_2']; ?>"><?= $land['f_art_isi_2']; ?></textarea>
            </div>
          </div>


      </div>
    </div>
      <hr>


   <div class="col-lg-12 mt-3 col-12">
      <div class="row">



          <div class="col-3">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_art_gambar_3']; ?>" height="150" alt="">
            </div>
          </div>
          <div class="col-5 text-center">
            <div class="custom-file" style="height: 100px;width: 390px;">
              <input type="file" class="dropify" id="gambar" name="art_3" value="">
              <label class="custom-file-label" for="customFile"><?= $land['f_art_gambar_3'] ?></label>
              <input type="text" value="<?= $land['f_art_gambar_3'] ?>" name="old3" hidden>
            </div>
          </div>
          <div class="col-4">
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_art_judul_3']; ?>" placeholder="<?= $land['f_art_judul_3']; ?>" name="art_judul_3">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="art_isi_3" value="" placeholder="<?= $land['f_art_isi_3']; ?>"><?= $land['f_art_isi_3']; ?></textarea>
            </div>
          </div>


      </div>
    </div>
      <hr>
          <div class="text-center" style="">
            <button class="btn btn-success">submit</button>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>











<div class="modal fade bd-example-modal-xl3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="card pt-3">
        <form enctype="multipart/form-data" method="post" action="<?= base_url('admin/edit_home_mdl') ?>">



   <div class="col-lg-12 mt-3 col-12">
      <div class="row">



          <div class="col-6 text-center" style="padding: 0 0px 0 90px;">
            <div class="card">
              <img src="<?= base_url('assets/landing/').$land['f_mdl_background']; ?>" height="200" alt="">
            </div>
          </div>
          <div class="col-6 text-center">
            <div class="custom-file" style="height: 100px;width: 390px;">
              <input type="file" class="dropify" id="gambar" name="mdl_1" value="">
              <label class="custom-file-label" for="customFile"><?= $land['f_mdl_background'] ?></label>
              <input type="text" value="<?= $land['f_mdl_background'] ?>" name="old1" hidden>
            </div>
          </div>

      </div>
    </div>
      <hr>


<div class="col-5">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_header']; ?>" placeholder="<?= $land['f_mdl_header']; ?>" name="mdl_header">
</div>

   <div class="col-lg-12 mt-3 col-12">
      <div class="row">



          <div class="col-4">
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_judul_1']; ?>" placeholder="<?= $land['f_mdl_judul_1']; ?>" name="mdl_judul_1">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_subjudul_1']; ?>" placeholder="<?= $land['f_mdl_subjudul_1']; ?>" name="mdl_subjudul_1">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="mdl_isi_1" value="" placeholder="<?= $land['f_mdl_isi_1']; ?>"><?= $land['f_mdl_isi_1']; ?></textarea>
            </div>
          </div>


          <div class="col-4">
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_judul_2']; ?>" placeholder="<?= $land['f_mdl_judul_2']; ?>" name="mdl_judul_2">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_subjudul_2']; ?>" placeholder="<?= $land['f_mdl_subjudul_2']; ?>" name="mdl_subjudul_2">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="mdl_isi_2" value="" placeholder="<?= $land['f_mdl_isi_2']; ?>"><?= $land['f_mdl_isi_2']; ?></textarea>
            </div>
          </div>

          <div class="col-4">
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_judul_3']; ?>" placeholder="<?= $land['f_mdl_judul_3']; ?>" name="mdl_judul_3">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_mdl_subjudul_3']; ?>" placeholder="<?= $land['f_mdl_subjudul_3']; ?>" name="mdl_subjudul_3">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="mdl_isi_3" value="" placeholder="<?= $land['f_mdl_isi_3']; ?>"><?= $land['f_mdl_isi_3']; ?></textarea>
            </div>
          </div>

      </div>
    </div>
      <hr>



          <div class="text-center" style="">
            <button class="btn btn-success">submit</button>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>











<div class="modal fade bd-example-modal-xl4" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="card pt-3">
        <form enctype="multipart/form-data" method="post" action="<?= base_url('admin/edit_home_foot') ?>">



   <div class="col-lg-12 mt-3 col-12">
      <div class="row">



          <div class="col-12 p-5 text-center">
            <div><h4 class="text-uppercase font-weight-bold">Artikel Footer</h4></div>
            <hr>
            <br>
            <div class="">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_foot_judul']; ?>" placeholder="<?= $land['f_foot_judul']; ?>" name="foot_judul">
              <input type="text" id="defaultContactFormName" class="form-control mb-4" value="<?= $land['f_foot_subjudul']; ?>" placeholder="<?= $land['f_foot_subjudul']; ?>" name="foot_subjudul">
            </div>
            <div class="">
              <textarea id="materialContactFormName" rows="5" class="form-control" name="foot_isi" value="" placeholder="<?= $land['f_foot_isi']; ?>"><?= $land['f_foot_isi']; ?></textarea>
            </div>
          </div>



      </div>
    </div>
      <hr>



          <div class="text-center" style="">
            <button class="btn btn-success">submit</button>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>


    <script type="text/javascript" src="<?php echo base_url('assets/dropify/dist/js/dropify.min.js')?>"></script>
    <script type="text/javascript">
        $(function()
        {
            $('.dropify').dropify(
            {
                messages:
                {
                    default: 'Drag atau drop untuk memilih gambar',
                    replace: 'Ganti',
                    remove:  'Hapus',
                    error:   'error'
                }
            });
        });


    </script>