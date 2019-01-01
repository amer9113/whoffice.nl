<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$student_signed_in = $this->session->userdata('student_signed_in');

		if ($student_signed_in == 'true') {
			$acc_id = $this->session->userdata('student_acc_id');
			$check_query = $this->db->where('id',$acc_id)->get('students');

			if ($check_query->num_rows() == 1) {
				if ($check_query->row()->active == 1) {
					redirect('student');
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
