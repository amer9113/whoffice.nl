<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	var $acc_id;
	var $acc_name;
	public function __construct(){
		parent::__construct();

		$administrator_signed_in = $this->session->userdata('administrator_signed_in') == true ? true : false;

		if (!$administrator_signed_in) {
			redirect('AdministratorLogin');
		}else{

			$administrator_acc_id = $this->session->userdata('administrator_acc_id');

			$check_query = $this->db->where('id',$administrator_acc_id)->get('administrators');

			if ($check_query->num_rows() == 1) {
				
				$account = $check_query->row();

				$this->acc_id = $account->id;
				$this->acc_name = $account->firstname." ".$account->lastname;
			}else{
				$this->session->sess_destroy();
				redirect('AdministratorLogin');
			}
		}
	}

	public function index()
	{
		$data['acc_name'] = $this->acc_name;
		$view = $this->load->view("administrator_home",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('AdministratorLogin');
	}
}