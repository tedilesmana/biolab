
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/dropzone.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone/basic.min.css') ?>">

<script type="text/javascript" src="<?php echo base_url('assets/dropzone/dropzone.min.js') ?>"></script>

<style type="text/css">

.bungkus {
  height: 100%;
  width: 100%;
  z-index: 999;
  position: absolute;
  background: rgba(0,0,0, .1);
  background-size: cover;
  top: 0;
}

.dropzone {
  margin-top: 40px;
  margin-bottom: 40px;
  height: 80vh;
  border: 2px dashed #0087F7;
}

</style>

<?php if ($this->session->userdata('email')): ?>
  

<div class="">
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="#!">

      <!-- Email -->
      <div class="md-form">
        <input type="text" name="album" id="album" class="form-control" placeholder="Buat Album Baru">
      </div>
      <!-- Sign in button -->
      <button type="button" name="tambah" id="tambah" class="btn btn-block btn-dark text-success"><i class="fas fa-plus text-white"> TAMBAHKAN GAMBAR BARU</i></button>



    </form>
    <!-- Form -->

  </div>
</div>




<div  id="drag" class="dynamic dynamic_step">
  


</div>

<?php endif ?>
<?php 

$album = $this->db->get('tbl_album')->result_array();
 ?>
<div class="mb-4 mt-5 container">
  <div class="row">
    <!-- Card -->
<?php foreach ($album as $album): ?>
  <?php 
    $this->db->limit(4); 
    $this->db->order_by('f_id_gallery', 'DESC');
    $foto = $this->db->get_where('tbl_gallery',['f_kode'=>$album['f_nama_album']])->result_array();
  ?>
    
  
    <div class="col-3 mt-3">
      <div class="container card">
      <div class="">
      <div class="row pb-3" style="background: rgba(0,0,0, .3);height: 210px;">


<?php foreach ($foto as $foto): ?>
            
        <div class="col-6">
          <img class="card-img-top mt-3 img-thumbnail" src="<?= base_url('assets/upload/'.$foto['f_nama_foto']) ?>" style="height: 80px;">
        </div>

<?php endforeach ?>         
        

      </div>

      <!-- Card content -->
      <?php if ($this->session->userdata('email')): ?>
      <div class="card mt-3 mb-2 bg-white">
        <a href="<?= base_url('admin/view_gallery/'.$album['f_nama_album']) ?>" class="btn d-block btn-dark"><?= $album['f_nama_album'] ?></a>

      </div>
     <?php endif; ?>

     <!-- Card content -->
      <?php if (!$this->session->userdata('email')): ?>
      <div class="card mt-3 mb-2 bg-white">
        <a href="<?= base_url('home/view_gallery/'.$album['f_nama_album']) ?>" class="btn d-block btn-dark"><?= $album['f_nama_album'] ?></a>

      </div>
     <?php endif; ?>


      </div>
      </div>
    </div>

<?php endforeach ?>

  </div>
</div>













<script type="text/javascript">

Dropzone.autoDiscover = false;

var foto_upload= new Dropzone(".dropzone",{
url: "<?php echo base_url('admin/proses_upload') ?>",
maxFilesize: 2,
method:"post",
acceptedFiles:"image/*",
paramName:"userfile",
dictInvalidFileType:"Type file ini tidak dizinkan",
addRemoveLinks:true,
});


//Event ketika Memulai mengupload
foto_upload.on("sending",function(a,b,c){
  a.token=Math.random();
  c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
});


//Event ketika foto dihapus
foto_upload.on("removedfile",function(a){
  var token=a.token;
  $.ajax({
    type:"post",
    data:{token:token},
    url:"<?php echo base_url('admin/remove_foto') ?>",
    cache:false,
    dataType: 'json',
    success: function(){
      console.log("Foto terhapus");
    },
    error: function(){
      console.log("Error");

    }
  });
});


</script>


















<script type="text/javascript">
   
$(document).on('click', '#tambah', function(e) {

      $('.dynamic_step').append(
        '<div class="bungkus p-5">'+
        '<div class="m-5 dropzone" style="padding:100px;">'+
        '<a href="<?= base_url('admin/gallery') ?>" class="btn btn-success float-right" style="position:absolute; top:0px;left:0px;">KEMBALI</a>'+
                '<div class="dz-message">'+
                 '<h3 style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);"> Klik atau Drop gambar disini</h3>'+
                '</div>'+
            '</div>'+
          '</div>'
      );

      Dropzone.autoDiscover = false;

      var foto_upload= new Dropzone(".dropzone",{
      url: "<?php echo base_url('admin/proses_upload') ?>",
      maxFilesize: 2,
      method:"post",
      acceptedFiles:"image/*",
      paramName:"userfile",
      dictInvalidFileType:"Type file ini tidak dizinkan",
      addRemoveLinks:true,
      });


      //Event ketika Memulai mengupload
      foto_upload.on("sending",function(a,b,c){
      a.token=Math.random()+'split'+document.getElementById("album").value;
      c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
      });


      //Event ketika foto dihapus
      //Event ketika foto dihapus
      foto_upload.on("removedfile",function(a){
        var token=a.token;
        $.ajax({
          type:"post",
          data:{token:token},
          url:"<?php echo base_url('admin/remove_foto') ?>",
          cache:false,
          dataType: 'json',
          success: function(){
            console.log(token);
          },
          error: function(){
            console.log("Error");

          }
        });
      });

});


</script>