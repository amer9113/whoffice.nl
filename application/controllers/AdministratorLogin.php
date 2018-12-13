<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministratorLogin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$administrator_signed_in = $this->session->userdata('administrator_signed_in') == true ? true : false;

		if ($administrator_signed_in) {

			$administrator_acc_id = $this->session->userdata('administrator_acc_id');

			$check_query = $this->db->where('id',$administrator_acc_id)->get('administrators');

			if ($check_query->num_rows() == 1) {
				redirect('Administrator');
			}else{
				$this->session->sess_destroy();
			}

		}
	}

	public function index()
	{
		$this->load->view('administrator_login');
	}

	public function validate_credential()
	{
		$data = $this->input->post();

		$match = array(
			'username' => $data['username'],
			'password' => sha1($data['password'])
			);


		$query = $this->db->where($match)->get('administrators');


		if ($query->num_rows() == 1) {
			$acc_id = $query->row()->id;
			$this->session->set_userdata('administrator_acc_id',$acc_id);
			$this->session->set_userdata('administrator_signed_in',true);
			redirect('AdministratorLogin');
			
		}else if($query->num_rows() == 0){
			$data['message'] = 'Invalid username or password.';
			$this->load->view('administrator_login',$data);
		}
	}
}