<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$teacher_signed_in = $this->session->userdata('teacher_signed_in');

		if ($teacher_signed_in == 'true') {
			$acc_id = $this->session->userdata('teacher_acc_id');
			$check_query = $this->db->where('id',$acc_id)->get('teachers');
			if ($check_query->num_rows() == 1) {
				if ($check_query->row()->active == 1) {
					redirect('teacher');
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
		$view = $this->load->view("teacher/teacher_login",'',true);
		$this->page->fix_view_template_text($view);
	}

	public function validate_credential()
	{
		$data = $this->input->post();

		$match = array(
			'username' => $data['username'],
			'password' => sha1($data['password'])
			);


		$query = $this->db->where($match)->get('teachers');

		if ($query->num_rows() == 1) {
			if ($query->row()->active == 0) {
				$data['message'] = 'This account is inactive, please contact support.';
				$view = $this->load->view("teacher/teacher_login",$data,true);
				$this->page->fix_view_template_text($view);
			} else {
				$acc_id = $query->row()->id;
				$this->session->set_userdata('teacher_acc_id',$acc_id);
				$this->session->set_userdata('teacher_signed_in','true');
				header('Location: '.base_url().'teacher');
			}
			
		}else if($query->num_rows() == 0){
			$data['message'] = 'Invalid username or password.';
			$view = $this->load->view("teacher/teacher_login",$data,true);
			$this->page->fix_view_template_text($view);
		}
	}
}