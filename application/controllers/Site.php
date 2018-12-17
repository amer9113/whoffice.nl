<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
					session_destroy();
				}
			}else{
				session_destroy();
			}

		}
	}

	public function index()
	{
		$view = $this->load->view("site",'',true);
		$this->page->fix_view_template_text($view);
	}
}
