<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$view = $this->load->view("site",'',true);
		$this->page->fix_view_template_text($view);
	}
}
