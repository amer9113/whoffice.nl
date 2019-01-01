<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_login extends CI_Controller {
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
		$view = $this->load->view("student/student_login",'',true);
		$this->page->fix_view_template_text($view);
	}

	public function validate_credential()
	{
		$data = $this->input->post();

		$match = array(
			'username' => $data['username'],
			'password' => sha1($data['password'])
			);


		$query = $this->db->where($match)->get('students');

		if ($query->num_rows() == 1) {
			if ($query->row()->active == 0) {
				$data['message'] = 'This account is inactive, please contact support.';
				$view = $this->load->view("student/student_login",$data,true);
				$this->page->fix_view_template_text($view);
			} else {
				$acc_id = $query->row()->id;
				$this->session->set_userdata('student_acc_id',$acc_id);
				$this->session->set_userdata('student_signed_in','true');
				$this->db->set('student_id',$acc_id)->set('login_time',time())->set('last_action_time',time())->insert('student_visites');
				header('Location: '.base_url().'student');
			}
			
		}else if($query->num_rows() == 0){
			$data['message'] = 'Invalid username or password.';
			$view = $this->load->view("student/student_login",$data,true);
			$this->page->fix_view_template_text($view);
		}
	}
}