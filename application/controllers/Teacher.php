<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
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

		$signed_in = (isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true ) ? true : false;

		if (!$signed_in) {
			redirect('login');
		}else{

			$acc_id = $_SESSION['acc_id'];

			$check_query = $this->db->where('id',$acc_id)->get('teachers');

			if ($check_query->num_rows() == 1) {
				
				$account = $check_query->row();

				if ($account->active == 1) {
					$this->acc_id = $account->id;
					$this->acc_name = $account->firstname." ".$account->lastname;
					$this->load->model('TeacherModel');
				}else{
					session_destroy();
					redirect('login');
				}
			}else{
				session_destroy();
				redirect('login');
			}
		}
	}

	public function index()
	{
		$view = $this->load->view("teacher_home",'',true);
		$this->page->fix_view_template_text($view);
	}

	public function logout()
	{
		session_destroy();
		redirect('site');
	}

	public function view_pages_texts(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();


			$this->form_validation->set_rules('text', 'Text', 'trim|required');
			$this->form_validation->set_rules('text_ar', 'Arabic Text', 'trim|required');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('page_nr', 'Page No.', 'trim|required|greater_than_equal_to[1]|less_than_equal_to[8]');


			if ($this->form_validation->run() == TRUE){

				$check_query = $this->db->where('name',$input['name'])->where('page_nr',$input['page_nr'])->get('page_text');
				
				if ($check_query->num_rows() == 0) {
					$this->db->insert('page_text',$input);
					if ($this->db->affected_rows() == 0) {
						$data['message'] = 'Error happened, try again later.';
					}
				}else{
					$data['message'] = 'This name is already exist. please choose another one';
				}
	        }
		}

		$data['pages_texts'] = $this->db->get('page_text')->result();

		$view = $this->load->view("pages_texts",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function alter_page_text($id){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();


			$this->form_validation->set_rules('text', 'Text', 'trim|required');
			$this->form_validation->set_rules('text_ar', 'Arabic Text', 'trim|required');
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('page_nr', 'Page No.', 'trim|required|greater_than_equal_to[1]|less_than_equal_to[8]');


			if ($this->form_validation->run() == TRUE){

				$check_query = $this->db->where('name',$input['name'])->where('page_nr',$input['page_nr'])->where('id !=',$id)->get('page_text');
				
				if ($check_query->num_rows() == 0) {
					$this->db->where('id',$id)->update('page_text',$input);
					if ($this->db->affected_rows() == 0) {
						$data['message'] = 'Error happened, try again later.';
					}else{
						redirect('teacher/view_pages_texts');
					}
				}else{
					$data['message'] = 'This name is already exist. please choose another one';
				}
	        }
		}


		$page_text = $this->db->where('id',$id)->get('page_text');

		if ($page_text->num_rows() == 1) {
			$data['data'] = $page_text->row();
			$view = $this->load->view("alter_page_text",$data,true);
			$this->page->fix_view_template_text($view);

		}else{
			echo "Not found.";
		}
	}

	public function check_students_pending_cards(){
		$data['pending_cards'] = $this->TeacherModel->get_pending_cards();
		$view = $this->load->view("pending_cards",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function check_card($card_no,$card_id){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$lock_card = $this->input->post('lock_card');

			if ($lock_card == "yes") {
				$this->db->set('edit_allow',0);
			}else{
				$this->db->set('edit_allow',1);
			}

			$this->db->where('id',$card_id)->set('checked_with_teacher',1)->update("card_$card_no");

			if ($this->db->affected_rows() > 0 ) {
				$student_id = $this->db->where('id',$card_id)->get("card_$card_no")->row()->user_id;
				$student = $this->db->where('id',$student_id)->get('students')->row();
				/*Send email here*/

				/*$this->load->library('email');
				$this->email->from('');
				$this->email->to($student->email);
				$this->email->subject('');
				$this->email->message($msg);

				try {
				   set_error_handler(create_function('', "throw new Exception(); return true;")); 
				   $this->email->send();
				} catch(Exception $e) { 
				   
				}*/

				redirect('teacher/check_students_pending_cards');
			}else{
				echo "Sorry, error.";
			}

		}


		$card_details_query = $this->db->where('id',$card_id)->get("card_$card_no");
		if ($card_details_query->num_rows() == 1) {
			$data['data'] = $card_details_query->row();
			$data['opened_for_teacher_checking'] = true;
			$view = $this->load->view("student_card_$card_no",$data,true);
			$this->page->fix_view_template_text($view,$page_no=1);
		} else {
			echo "Sorry, card isn't found.";
		}
	}

	public function check_students_times(){
		$data['students_times'] = $this->TeacherModel->get_students_times();

		$view = $this->load->view("student_times",$data,true);
		$this->page->fix_view_template_text($view);
	}
}
