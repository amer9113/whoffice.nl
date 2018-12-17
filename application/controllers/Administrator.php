<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	var $acc_id;
	var $acc_name;
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

		if (!$administrator_signed_in) {
			redirect('AdministratorLogin');
		}else{

			$administrator_acc_id = $_SESSION['administrator_acc_id'];

			$check_query = $this->db->where('id',$administrator_acc_id)->get('administrators');

			if ($check_query->num_rows() == 1) {
				
				$account = $check_query->row();

				$this->acc_id = $account->id;
				$this->acc_name = $account->firstname." ".$account->lastname;
			}else{
				session_destroy();
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
		session_destroy();
		redirect('AdministratorLogin');
	}
}