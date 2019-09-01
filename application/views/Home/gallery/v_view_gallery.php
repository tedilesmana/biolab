<div class="container card mt-5 mb-5">
	<div class="">
		<div class="row pt-5" style="background: rgba(0,0,0, .3);">



<?php
	$foto = $this->db->get_where('tbl_gallery',['f_kode'=>$album])->result_array(); 
?>
<?php $a=0; ?>
<?php foreach ($foto as $foto): ?>
	<?php $a++; ?>
	
			<div class="col-3">
				<a href="" data-toggle="modal" data-target="#a<?= $a; ?>" style="height: 250px;" class="card p-2 mb-3">
				<img class="card-img-top p-2 mt-3 mb-3 img-thumbnail" src="<?= base_url('assets/upload/'.$foto['f_nama_foto']) ?>" style="max-height: 200px;">
				</a>
			</div>




			<!-- Modal -->
			<div class="modal fade" id="a<?= $a; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
			  aria-hidden="true">

			  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
			  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">


			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
						<div class="col-12">
							<a href="" data-toggle="modal" data-target="#exampleModalCenter">
							<img class="card-img-top p-2 mt-3 mb-3 img-thumbnail" src="<?= base_url('assets/upload/'.$foto['f_nama_foto']) ?>">
							</a>
						</div>
			      </div>
			    </div>
			  </div>
<?php endforeach ?>
			





			
		</div>
	</div>
</div>


