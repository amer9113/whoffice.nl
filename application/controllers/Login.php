<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$signed_in = $this->session->userdata('signed_in') == true ? true : false;

		if ($signed_in) {

			$acc_id = $this->session->userdata('acc_id');
			$acc_type = $this->session->userdata('acc_type');


			if ($acc_type == "student") {
				$check_query = $this->db->where('id',$acc_id)->get('students');
			}else{
				$check_query = $this->db->where('id',$acc_id)->get('teachers');
			}

			if ($check_query->num_rows() == 1) {
				if ($check_query->row()->active == 1) {
					redirect($acc_type);
				}else{
					$this->session->sess_destroy();
				}
			}else{
				$this->session->sess_destroy();
			}

		}
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function validate_credential()
	{
		$data = $this->input->post();

		$match = array(
			'username' => $data['username'],
			'password' => sha1($data['password'])
			);


		if ($data['type'] == "student") {
			$query = $this->db->where($match)->get('students');
		}else{
			$query = $this->db->where($match)->get('teachers');
		}


		if ($query->num_rows() == 1) {
			if ($query->row()->active == 0) {
				$data['message'] = 'This account is inactive, please contact support.';
				$this->load->view('login',$data);
			} else {
				$acc_id = $query->row()->id;
				$this->session->set_userdata('acc_id',$acc_id);
				$this->session->set_userdata('signed_in',true);
				$this->session->set_userdata('acc_type',$data['type']);
				redirect('login');
			}
			
		}else if($query->num_rows() == 0){
			$data['message'] = 'Invalid username or password.';
			$this->load->view('login',$data);
		}
	}
}