<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministratorLogin extends CI_Controller {
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
		
		$administrator_signed_in = $_SESSION['administrator_signed_in'] == true ? true : false;

		if ($administrator_signed_in) {

			$administrator_acc_id = $_SESSION['administrator_acc_id'];

			$check_query = $this->db->where('id',$administrator_acc_id)->get('administrators');

			if ($check_query->num_rows() == 1) {
				redirect('Administrator');
			}else{
				session_destroy();
			}

		}
	}

	public function index()
	{
		$view = $this->load->view("administrator_login",'',true);
		$this->page->fix_view_template_text($view);
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
			$_SESSION['administrator_acc_id'] = $acc_id;
			$_SESSION['administrator_signed_in'] = true;
			redirect('AdministratorLogin');
			
		}else if($query->num_rows() == 0){
			$data['message'] = 'Invalid username or password.';
			$view = $this->load->view("administrator_login",$data,true);
			$this->page->fix_view_template_text($view);
		}
	}
}