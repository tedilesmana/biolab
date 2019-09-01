<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		if (!$this->session->userdata('email')) {
			redirect('home/login');
		}
	}

	public function index()
	{
		$this->template->template_admin('admin/v_edit_home');
	}

	public function pesan()
	{
		$this->template->template_admin('admin/v_pesan');
	}

	public function scanQrAlat()
	{
		$this->template->template_admin('admin/v_scanQrAlat');
	}

	public function scanQrBahan()
	{
		$this->template->template_admin('admin/v_scanQrBahan');
	}

	public function permintaan_penggunaan_lab()
	{
		$this->template->template_admin('admin/v_permintaan_penggunaan_lab');
	}

	public function detail_permintaan($id)
	{
		if ($_POST) {
	        if ($this->input->post('jam[]')) {

				$jadwal = $this->db->get_where('tbl_jadwal_lab',['f_id_pengajuan'=>$id])->row_array();
	        	$d_jam = implode('~//~', $this->input->post('jam[]'));
	        	$jam = explode('~//~', $d_jam);
	        	$tgl = $this->input->post('tgl');

	        	

	        	$a=-1;
				while($a<count($jam)-1){
					$a++;
					$data = [
	        			'f_kelas'=>$jadwal['f_kelas'],
	        			'f_jam_ke'=>$jam[$a],
	        			'f_tgl_jadwal'=>$tgl,
	        			'f_id_pengajuan'=>$jadwal['f_id_pengajuan']
	        			];

					$this->db->insert('tbl_jadwal',$data);
				}

				$this->db->update('tbl_jadwal_lab',['f_status'=>'konfirmed','f_tgl_terjadwal'=>$tgl],['f_id_pengajuan'=>$id]);

				redirect('admin');

	        }else{
				$data['cari'] = $this->input->post('cari');
				$cari = $this->input->post('cari');
		        $this->db->like('f_tgl_jadwal',$cari);
		        $data['data'] = $this->db->get('tbl_jadwal')->result_array();
				$data['id'] = $id;
				$data['jadwal'] = $this->db->get_where('tbl_jadwal_lab',['f_id_pengajuan'=>$id])->result_array();
				$data['alat'] = $this->db->get_where('tbl_alat_bahan',['f_id_peminjam_alat'=>$id])->result_array();
				$this->template->template_admin('admin/v_detail_permintaan',$data);
	        }
		}else{
			$data['id'] = $id;
			$data['jadwal'] = $this->db->get_where('tbl_jadwal_lab',['f_id_pengajuan'=>$id])->result_array();
			$data['alat'] = $this->db->get_where('tbl_alat_bahan',['f_id_peminjam_alat'=>$id])->result_array();
			$this->template->template_admin('admin/v_detail_permintaan',$data);
		}
		
	}

	public function gallery()
	{
		$this->template->template_admin('home/gallery/v_gallery');
	}

	public function view_gallery($album)
	{
		$data['album'] = $album;
		$this->template->template_admin('home/gallery/v_view_gallery',$data);
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


	public function tambah_data_alat()
	{
		if ($_POST) {
			$d_kode_alat = implode('~//~', $this->input->post('kode_alat[]'));
			$kode_alat = explode('~//~', $d_kode_alat);
			$d_nama_alat = implode('~//~', $this->input->post('nama_alat[]'));
			$nama_alat = explode('~//~', $d_nama_alat);
			$d_jumlah = implode('~//~', $this->input->post('jumlah[]'));
			$jumlah = explode('~//~', $d_jumlah);
			$d_tempat = implode('~//~', $this->input->post('tempat[]'));
			$tempat = explode('~//~', $d_tempat);
			$d_spesifikasi = implode('~//~', $this->input->post('spesifikasi[]'));
			$spesifikasi = explode('~//~', $d_spesifikasi);
			$d_kategori = implode('~//~', $this->input->post('kategori[]'));
			$kategori = explode('~//~', $d_kategori);
			
			$a=-1;
			while($a<count($nama_alat)-1){
				$a++;
			
				// $this->db->select_max('f_id_alat');
				// $id = $this->db->get('tbl_data_alat')->result_array();
				// $range = $id[0]['f_id_alat']+1;
				// $kode='A'.sprintf("%03s", $range);

				$data=[
					'f_kode_alat'=>$kode_alat[$a],
					'f_nama_alat'=>$nama_alat[$a],
					'f_kategori'=>$kategori[$a],
					'f_jumlah'=>$jumlah[$a],
					'f_tanggal_masuk'=>date('Y-m-d'),
					'f_tempat'=>$tempat[$a],
					'f_spesifikasi'=>$spesifikasi[$a]
				];

				$this->db->insert('tbl_data_alat',$data);
			}

			redirect('admin/tambah_data_alat');

		}else{
			$this->template->template_admin('admin/v_tambah_data_alat');
		}
	}


	public function tambah_data_bahan()
	{
		if ($_POST) {
			$d_kode_bahan = implode('~//~', $this->input->post('kode_bahan[]'));
			$kode_bahan = explode('~//~', $d_kode_bahan);
			$d_nama_bahan = implode('~//~', $this->input->post('nama_bahan[]'));
			$nama_bahan = explode('~//~', $d_nama_bahan);
			$d_jumlah = implode('~//~', $this->input->post('jumlah[]'));
			$jumlah = explode('~//~', $d_jumlah);
			$d_tempat = implode('~//~', $this->input->post('tempat[]'));
			$tempat = explode('~//~', $d_tempat);
			$d_spesifikasi = implode('~//~', $this->input->post('spesifikasi[]'));
			$spesifikasi = explode('~//~', $d_spesifikasi);
			$d_kategori = implode('~//~', $this->input->post('kategori[]'));
			$kategori = explode('~//~', $d_kategori);
			$d_kondisi = implode('~//~', $this->input->post('kondisi[]'));
			$kondisi = explode('~//~', $d_kondisi);
			$d_kadaluarsa = implode('~//~', $this->input->post('kadaluarsa[]'));
			$kadaluarsa = explode('~//~', $d_kadaluarsa);
			
			$a=-1;
			while($a<count($nama_bahan)-1){
				$a++;
			
				// $this->db->select_max('f_id_alat');
				// $id = $this->db->get('tbl_data_alat')->result_array();
				// $range = $id[0]['f_id_alat']+1;
				// $kode='A'.sprintf("%03s", $range);

				$data=[
					'f_kode_bahan'=>$kode_bahan[$a],
					'f_nama_bahan'=>$nama_bahan[$a],
					'f_jumlah'=>$jumlah[$a],
					'f_tgl_masuk'=>date('Y-m-d'),
					'f_tempat'=>$tempat[$a],
					'f_kategori'=>$kategori[$a],
					'f_kondisi'=>$kondisi[$a],
					'f_kadaluarsa'=>$kadaluarsa[$a],
					'f_spesifikasi'=>$spesifikasi[$a]
				];

				$this->db->insert('tbl_data_bahan',$data);
			}

			redirect('admin/tambah_data_bahan');

		}else{
			$this->template->template_admin('admin/v_tambah_data_bahan');
		}
	}

	public function jadwal_lab()
	{
		$this->template->template_admin('home/fasilitas_lab/v_jadwal_lab');
	}

	public function print_jadwal_lab()
	{
		$this->template->template_admin('admin/v_print_jadwal_lab');
	}

	public function print_data_inventaris()
	{
		$this->template->template_admin('admin/v_print_data_inventaris');
	}

	public function lihat_pesan($id)
	{
		$this->db->update('tbl_pesan',['f_status'=>1],['f_id_pesan'=>$id]);
		$data['pesan']=$this->db->get_where('tbl_pesan',['f_id_pesan'=>$id])->row_array();
		$this->template->template_admin('admin/v_lihat_pesan',$data);
	}

	public function konfirmasi_peminjaman($id)
	{
		$this->db->update('tbl_jadwal_lab',['f_tgl_pinjam'=>date('m/d/Y')],['f_id_pengajuan'=>$id]);
		redirect('admin/permintaan_penggunaan_lab');
	}

	public function konfirmasi_pengembalian($id)
	{
		$this->db->update('tbl_jadwal_lab',['f_tgl_kembali'=>date('m/d/Y')],['f_id_pengajuan'=>$id]);
		redirect('admin/permintaan_penggunaan_lab');
	}

	public function data_alat()
	{
		$this->template->template_admin('admin/v_data_alat');
	}

	public function data_bahan()
	{
		$this->template->template_admin('admin/v_data_bahan');
	}

	public function cek_data_alat($qr)
	{
		$data['qr']=$qr;

		$this->template->template_admin('admin/v_cek_data_alat',$data);
	}

	public function cek_data_bahan($qr)
	{
		$data['qr']=$qr;

		$this->template->template_admin('admin/v_cek_data_bahan',$data);
	}

	public function edit_home()
	{
		if (strlen($_FILES['corousel_1']['name'])>0) {

			$old = $this->input->post('old1');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('corousel_1'))
			{
				$corousel_1 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_corousel_1'=>$corousel_1],['f_id_landing'=>1]);
			}
		}

		if (strlen($_FILES['corousel_2']['name'])>0) {

			$old = $this->input->post('old2');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('corousel_2'))
			{
				$corousel_2 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_corousel_2'=>$corousel_2],['f_id_landing'=>1]);
			}
		}

		if (strlen($_FILES['corousel_3']['name'])>0) {

			$old = $this->input->post('old3');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('corousel_3'))
			{
				$corousel_3 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_corousel_3'=>$corousel_3],['f_id_landing'=>1]);
			}
		}

		redirect('admin');

	}

	public function edit_home_art()
	{
		if (strlen($_FILES['art_1']['name'])>0) {

			$old = $this->input->post('old1');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('art_1'))
			{
				$art_1 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_art_gambar_1'=>$art_1],['f_id_landing'=>1]);
			}
		}

		if (strlen($_FILES['art_2']['name'])>0) {

			$old = $this->input->post('old2');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('art_2'))
			{
				$art_2 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_art_gambar_2'=>$art_2],['f_id_landing'=>1]);
			}
		}

		if (strlen($_FILES['art_3']['name'])>0) {

			$old = $this->input->post('old3');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('art_3'))
			{
				$art_3 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_art_gambar_3'=>$art_3],['f_id_landing'=>1]);
			}
		}

		$judul_1=$this->input->post('art_judul_1');
		$judul_2=$this->input->post('art_judul_2');
		$judul_3=$this->input->post('art_judul_3');
		$isi_1=$this->input->post('art_isi_1');
		$isi_2=$this->input->post('art_isi_2');
		$isi_3=$this->input->post('art_isi_3');

		$data = [
			'f_art_judul_1'=>$judul_1,
			'f_art_judul_2'=>$judul_2,
			'f_art_judul_3'=>$judul_3,
			'f_art_isi_1'=>$isi_1,
			'f_art_isi_2'=>$isi_2,
			'f_art_isi_3'=>$isi_3
		];

		$this->db->update('tbl_landing',$data,['f_id_landing'=>1]);
		redirect('admin');
	}

	public function edit_home_mdl()
	{
		if (strlen($_FILES['mdl_1']['name'])>0) {

			$old = $this->input->post('old1');
			if(file_exists($file='assets/landing/'.$old)){
						unlink($file);
					}

			$config['upload_path'] = './assets/landing/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('mdl_1'))
			{
				$mdl_1 = $this->upload->data('file_name');
				$this->db->update('tbl_landing',['f_mdl_background'=>$mdl_1],['f_id_landing'=>1]);
			}
		}

		$subjudul_1=$this->input->post('mdl_subjudul_1');
		$subjudul_2=$this->input->post('mdl_subjudul_2');
		$subjudul_3=$this->input->post('mdl_subjudul_3');
		$judul_1=$this->input->post('mdl_judul_1');
		$judul_2=$this->input->post('mdl_judul_2');
		$judul_3=$this->input->post('mdl_judul_3');
		$isi_1=$this->input->post('mdl_isi_1');
		$isi_2=$this->input->post('mdl_isi_2');
		$isi_3=$this->input->post('mdl_isi_3');
		$mdl_header=$this->input->post('mdl_header');

		$data = [
			'f_mdl_header'=>$mdl_header,
			'f_mdl_judul_1'=>$judul_1,
			'f_mdl_judul_2'=>$judul_2,
			'f_mdl_judul_3'=>$judul_3,
			'f_mdl_subjudul_1'=>$subjudul_1,
			'f_mdl_subjudul_2'=>$subjudul_2,
			'f_mdl_subjudul_3'=>$subjudul_3,
			'f_mdl_isi_1'=>$isi_1,
			'f_mdl_isi_2'=>$isi_2,
			'f_mdl_isi_3'=>$isi_3
		];

		$this->db->update('tbl_landing',$data,['f_id_landing'=>1]);
		redirect('admin');
	}

	public function edit_home_foot()
	{
		$subjudul=$this->input->post('foot_subjudul');
		$judul=$this->input->post('foot_judul');
		$isi=$this->input->post('foot_isi');

		$data = [
			'f_foot_judul'=>$judul,
			'f_foot_subjudul'=>$subjudul,
			'f_foot_isi'=>$isi
		];

		$this->db->update('tbl_landing',$data,['f_id_landing'=>1]);
		redirect('admin');
	}

	public function hapus_alat($kode)
	{
		$this->db->delete('tbl_data_alat',['f_kode_alat'=>$kode]);
		redirect('admin/data_alat');
	}

	public function edit_alat($kode)
	{
		$data['alat']=$this->db->get_where('tbl_data_alat',['f_kode_alat'=>$kode])->row_array();
		if ($_POST) {

			$kode_alat=$this->input->post('kode_alat');
			$nama_alat=$this->input->post('nama_alat');
			$kategori=$this->input->post('kategori');
			$jumlah=$this->input->post('jumlah');
			$tempat=$this->input->post('tempat');
			$spesifikasi=$this->input->post('spesifikasi');

			$data=[
					'f_kode_alat'=>$kode_alat,
					'f_nama_alat'=>$nama_alat,
					'f_kategori'=>$kategori,
					'f_jumlah'=>$jumlah,
					'f_tempat'=>$tempat,
					'f_spesifikasi'=>$spesifikasi
				];

			$this->db->update('tbl_data_alat',$data,['f_kode_alat'=>$kode]);

			redirect('admin/data_alat');

		}
		$this->template->template_admin('admin/v_edit_alat',$data);
	}

	public function hapus_bahan($kode)
	{
		$this->db->delete('tbl_data_bahan',['f_kode_bahan'=>$kode]);
		redirect('admin/data_bahan');
	}

	public function edit_bahan($kode)
	{
		$data['bahan']=$this->db->get_where('tbl_data_bahan',['f_kode_bahan'=>$kode])->row_array();
		if ($_POST) {

			$kode_bahan=$this->input->post('kode_bahan');
			$nama_bahan=$this->input->post('nama_bahan');
			$kategori=$this->input->post('kategori');
			$jumlah=$this->input->post('jumlah');
			$tempat=$this->input->post('tempat');
			$spesifikasi=$this->input->post('spesifikasi');
			$kondisi=$this->input->post('kondisi');
			$kadaluarsa=$this->input->post('kadaluarsa');

			$data=[
					'f_kode_bahan'=>$kode_bahan,
					'f_nama_bahan'=>$nama_bahan,
					'f_jumlah'=>$jumlah,
					'f_tempat'=>$tempat,
					'f_kategori'=>$kategori,
					'f_kondisi'=>$kondisi,
					'f_kadaluarsa'=>$kadaluarsa,
					'f_spesifikasi'=>$spesifikasi
				];

			$this->db->update('tbl_data_bahan',$data,['f_kode_bahan'=>$kode]);

			redirect('admin/data_bahan');

		}
		$this->template->template_admin('admin/v_edit_bahan',$data);
	}
}
