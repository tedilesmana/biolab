  <link href="<?= base_url('assets/css/'); ?>home.css" rel="stylesheet">
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
      ...
    </div>
  </div>
</div>
<?php endforeach ?>
