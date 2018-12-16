<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	var $acc_id;
	var $acc_name;
	public function __construct(){
		parent::__construct();

		$signed_in = $this->session->userdata('signed_in') == true ? true : false;

		if (!$signed_in) {
			redirect('login');
		}else{

			$acc_id = $this->session->userdata('acc_id');

			$check_query = $this->db->where('id',$acc_id)->get('teachers');

			if ($check_query->num_rows() == 1) {
				
				$account = $check_query->row();

				if ($account->active == 1) {
					$this->acc_id = $account->id;
					$this->acc_name = $account->firstname." ".$account->lastname;
				}else{
					$this->session->sess_destroy();
					redirect('login');
				}
			}else{
				$this->session->sess_destroy();
				redirect('login');
			}
		}
	}

	public function index()
	{
		$data['acc_name'] = $this->acc_name;
		$view = $this->load->view("teacher_home",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function logout()
	{
		$this->session->sess_destroy();
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
}
