<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template');
		if ($this->session->userdata('email')) {
			redirect('admin');
		}
	}

	public function index()
	{
		$this->template->template('home/v_index');
	}

	public function kontak()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$subjek=$this->input->post('subjek');
		$pesan=$this->input->post('pesan');
		if ($_POST) {

			$data=[
				'f_nama'=>$nama,
				'f_email'=>$email,
				'f_subjek'=>$subjek,
				'f_pesan'=>$pesan,
				'f_date'=>date('Y-m-d')
			];
			$this->db->insert('tbl_pesan',$data);
			$this->session->set_flashdata('alert','Pesan anda telah terkirim, terimakasih atas masukan anda');
			redirect('home/contact');
		}else{
			$this->template->template('home/contact');
		}
		
	}

	public function profile()
	{
		$this->template->template('home/v_profile');
	}

	public function contact()
	{
		$this->template->template('home/v_contact');
	}

	public function tata_tertib()
	{
		$this->template->template('home/v_tata_tertib');
	}

	public function gallery()
	{
		$this->template->template('home/gallery/v_gallery');
	}


	//Untuk proses upload foto
	function proses_upload(){

        $config['upload_path']   = 'assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$kd=explode('split', $token);
        	$a_kd=$kd[1];
        	if (strlen($a_kd)>1) {
        		$kode=$a_kd;
        	}else{
        		$kode='campur';
        	}
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('tbl_gallery',array('f_nama_foto'=>$nama,'f_token'=>$token,'f_kode'=>$kode));
        	$row = $this->db->get_where('tbl_album',['f_nama_album'=>$kode])->num_rows();
        	if ($row==0) {
        		$this->db->insert('tbl_album',['f_nama_album'=>$kode]);
        	}
        }


	}


	//Untuk menghapus foto
	function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('tbl_gallery',array('f_token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->f_nama_foto;
			if(file_exists($file='assets/upload/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('tbl_gallery',array('f_token'=>$token));

		}


		echo "{}";
	}


	// public function remove_foto(){

	// 	//Ambil token foto
	// 	$token=$this->input->post('token_foto');
	// 	$foto=$this->db->get_where('tbl_gallery',array('f_token'=>$token));


	// 	if($foto->num_rows()>0){
	// 		$hasil=$foto->row();
	// 		$nama_foto=$hasil->f_nama_foto;
	// 		if(file_exists($file='assets/upload/'.$nama_foto)){
	// 			unlink($file);
	// 		}
	// 		$this->db->delete('tbl_gallery',array('f_token'=>$token));

	// 	}


	// 	echo "{}";
	// }

	// public function proses_upload(){

 //        $config['upload_path']   = 'assets/upload/';
 //        $config['allowed_types'] = 'gif|jpg|png|ico';
 //        $this->load->library('upload',$config);

 //        if($this->upload->do_upload('userfile')){
 //        	$token=$this->input->post('token_foto');
 //        	$kd = explode('split', $token);
 //        	$kd2 = $kd[1];

 //        	if (strlen($kd2)>2) {
 //        		$kode = $kd2;
 //        	}else{
 //        		$kode = 'campur';
 //        	}

 //        	$nama=$this->upload->data('file_name');
 //        	$this->db->insert('tbl_gallery',array('f_nama_foto'=>$nama,'f_token'=>$token,'f_kode'=>$kode));
 //        	$row = $this->db->get_where('tbl_album',['f_nama_album'=>$kode])->num_rows();
 //        	if ($row==0) {
 //        		$this->db->insert('tbl_album',['f_nama_album'=>$kode]);
 //        	}
 //        }


	// }



	public function view_gallery($album)
	{
		$data['album'] = $album;
		$this->template->template('home/gallery/v_view_gallery',$data);
	}
	
	public function pengajuan_jadwal_lab()
	{
		if ($_POST) {
			$nama = $this->input->post('nama');
			$kelas = $this->input->post('kelas');
			$judul = $this->input->post('judul');
			$tanggal_pengajuan = $this->input->post('tgl_pengajuan');
			$no_hp = $this->input->post('no_hp');

			$data_peminjam = [
			'f_nama'=>$nama,
			'f_kelas'=>$kelas,
			'f_judul_praktik'=>$judul,
			'f_tgl_pengajuan'=>$tanggal_pengajuan,
			'f_no_hp'=>$no_hp
							];
			$this->db->insert('tbl_jadwal_lab',$data_peminjam);




			$d_nama_alat = implode('~//~', $this->input->post('nama_ab[]'));
			$nama_alat = explode('~//~', $d_nama_alat);


			$d_jumlah = implode('~//~', $this->input->post('jumlah[]'));
			$jumlah = explode('~//~', $d_jumlah);


			$this->db->select_max('f_id_pengajuan');
			$id = $this->db->get('tbl_jadwal_lab')->result_array();
			$id_peminjam = $id[0]['f_id_pengajuan'];
			$a=-1;
			while($a<count($nama_alat)-1){
				$a++;
				$data_alat = [
							'f_nama_alat_bahan'=>$nama_alat[$a],
							'f_jumlah'=>$jumlah[$a],
							'f_id_peminjam_alat'=>$id_peminjam
			 			];

				$this->db->insert('tbl_alat_bahan',$data_alat);
			}

			redirect('home');
		}else{
			$this->template->template('home/fasilitas_lab/v_pengajuan_jadwal_lab');
		}
	}

	public function data_alat()
	{
		$this->template->template('admin/v_data_alat');
	}

	public function data_bahan()
	{
		$this->template->template('admin/v_data_bahan');
	}

	public function jadwal_lab()
	{
		// if ($_POST) {
		// 	$nama = $this->input->post('nama');
		// 	$tanggal = $this->input->post('tgl');
		// 	$kelas = $this->input->post('kelas');
		// 	$judul = $this->input->post('judul');

		// 	$data = [
		// 				'f_tanggal'=>$tanggal,
		// 				'f_hari'=> 0,
		// 				'f_kelas'=>$kelas,
		// 				'f_nama'=>$nama,
		// 				'f_judul_praktik'=>$judul
		// 			];

		// 	$this->db->insert('tbl_jadwal',$data);
		// }else
		
		$this->template->template('home/fasilitas_lab/v_jadwal_lab');
		
	}

	public function login()
	{
		$this->template->template('home/v_login');
	}

}
