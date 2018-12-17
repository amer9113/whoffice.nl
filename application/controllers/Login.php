<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();

		include_once APPPATH.'/libraries/FileSessionHandler.php';
		$handler = new FileSessionHandler();
		session_set_save_handler(
		    array($handler, 'open'),
		    array($handler, 'close'),
		    array($handler, 'read'),
		    array($handler, 'write'),
		    array($handler, 'destroy'),
		    array($handler, 'gc')
		    );

		// the following prevents unexpected effects when using objects as save handlers
		register_shutdown_function('session_write_close');

		session_start();
		// proceed to set and retrieve values by key from $_SESSION
		
		$signed_in = (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true ) ? true : false;

		if ($signed_in) {

			$acc_id = $_SESSION['acc_id'];
			$acc_type = $_SESSION['acc_type'];


			if ($acc_type == "student") {
				$check_query = $this->db->where('id',$acc_id)->get('students');
			}else{
				$check_query = $this->db->where('id',$acc_id)->get('teachers');
			}

			if ($check_query->num_rows() == 1) {
				if ($check_query->row()->active == 1) {
					redirect($acc_type);
				}else{
					unset($_SESSION);
				}
			}else{
				unset($_SESSION);
			}

		}
	}

	public function index()
	{
		$view = $this->load->view("student_login",'',true);
		$this->page->fix_view_template_text($view);
	}

	public function teacher()
	{
		$view = $this->load->view("teacher_login",'',true);
		$this->page->fix_view_template_text($view);
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

				if ($data['type'] == "student") {
					$view = $this->load->view("student_login",$data,true);
				}else{
					$view = $this->load->view("teacher_login",$data,true);
				}
				$this->page->fix_view_template_text($view);
			} else {
				$acc_id = $query->row()->id;
				$_SESSION['acc_id'] = $acc_id;
				$_SESSION['signed_in'] = true;
				$_SESSION['acc_type'] = $data['type'];
				header('Location: '.base_url().'login');
			}
			
		}else if($query->num_rows() == 0){
			$data['message'] = 'Invalid username or password.';
			if ($data['type'] == "student") {
				$view = $this->load->view("student_login",$data,true);
			}else{
				$view = $this->load->view("teacher_login",$data,true);
			}
			$this->page->fix_view_template_text($view);
		}
	}
}