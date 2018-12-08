<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	var $acc_id;
	var $acc_name;
	public function __construct(){
		parent::__construct();

		$signed_in = $this->session->userdata('signed_in') == true ? true : false;

		if (!$signed_in) {
			redirect('login');
		}else{

			$acc_id = $this->session->userdata('acc_id');

			$check_query = $this->db->where('id',$acc_id)->get('teachers');

			if ($check_query->num_rows() == 1) {
				
				$account = $check_query->row();

				if ($account->active == 1) {
					$this->acc_id = $account->id;
					$this->acc_name = $account->firstname." ".$account->lastname;
				}else{
					$this->session->sess_destroy();
					redirect('login');
				}
			}else{
				$this->session->sess_destroy();
				redirect('login');
			}
		}
	}

	public function index()
	{
		$data['acc_name'] = $this->acc_name;
		$this->load->view('teacher_home',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('site');
	}
}
