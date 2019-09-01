
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


<div class="float-right mr-5">
    <button type="button" name="tambah" id="tambah" class="btn btn-secondary text-success">
    <i class="fas fa-plus text-white"> TAMBAH BARIS</i>
    </button>
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
        <th scope="col">Hapus</th>
      </tr>
    </thead>
    <tbody  id="drag" class="dynamic dynamic_step" name="langkah" class="text-center">
      <tr class="border" id="row_soal">
      </tr>
    </tbody>
  </table>
</div>
<div class="mb-5">
     <button class="btn btn-dark btn-rounded y-4 waves-effect z-depth-0" type="submit">Submit</button>
</div>
</form>















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

        var i=1;
        $('#tambah').click(function()
        {
            i++;
            $('.dynamic_step').append(
                


    '<tr class="border'+i+'" id="row_soal">'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<input type="text" id="materialContactFormName" class="form-control" name="kode_alat['+i+']" placeholder="">'+
            '</div>'+
        '</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<input type="text" id="materialContactFormName" class="form-control" name="nama_alat['+i+']" placeholder="">'+
            '</div>'+
        '</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<input type="text" id="materialContactFormName" class="form-control" name="kategori['+i+']" placeholder="">'+
            '</div>'+
        '</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<input type="text" id="materialContactFormName" class="form-control" name="jumlah['+i+']" required>'+
            '</div>'+
        '</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<input type="text" id="materialContactFormName" class="form-control" name="tempat['+i+']" required>'+
            '</div>'+
        '</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<input type="text" id="materialContactFormName" class="form-control" name="spesifikasi['+i+']" required>'+
            '</div>'+
        '</td>'+
        '<td>'+
        '<button type="button" name="hapus" id="'+i+'" class="btn text-danger btn-info btn-hapus" style="">'+
            '<div class="font-weight-bold text-white">HAPUS</div>'+
        '</button>'+
        '</td>'+
      '</tr>'


            );


        $(function()
        {
            var jum = $('tr').length-1;
            $('.jum_soal').html(jum);
        });


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

        $(document).on('click', '.btn-hapus', function()
        {
            var jum = $('tr').length-2;
            $('.jum_soal').html(jum);
            var id_btn = $(this).attr("id");
            $('.border'+id_btn+'').remove();
        });

        $(function()
        {
            var jum = $('tr').length-1;
            $('.jum_soal').html(jum);
        });




    </script>