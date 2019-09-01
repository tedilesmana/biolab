<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('template');
	}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()==false) {
			redirect('home/login');
		}else{
			$email=$this->input->post('email');
			$password=md5($this->input->post('password'));
			$row_email=$this->db->get_where('tbl_admin',['f_email'=>$email]);
			if ($row_email->num_rows()>0) {

				$row=$row_email->row_array();
				if ($row['f_password']==$password) {
					$data = [
							'email'=>$row['f_email'],
							'username'=>$row['f_username']
					];
					$this->session->set_userdata($data);
					redirect('admin');
				}else{
					redirect('home/login');
				}

			}else{
				redirect('home/login');
			}

		}
	}

	public function logout()
	{
		
		$data = [ 
			'email'		=> $this->session->userdata('email'),
			'username'	=> $this->session->userdata('username')
		];

		// Unset session
		$this->session->unset_userdata($data);

		// Destroy session
		$this->session->sess_destroy();

		// Recreate session
		session_start();
		$this->session->sess_regenerate(TRUE);

		redirect('home/login');
	}

}