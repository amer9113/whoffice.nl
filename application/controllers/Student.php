<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	var $acc_id;
	var $acc_name;
	public function __construct(){
		parent::__construct();

		$signed_in = $this->session->userdata('signed_in') == true ? true : false;

		if (!$signed_in) {
			redirect('login');
		}else{

			$acc_id = $this->session->userdata('acc_id');

			$check_query = $this->db->where('id',$acc_id)->get('students');

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
		$this->load->view('student_home',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('site');
	}

	public function card($no){
		if ($no >= 1 && $no <= 8) {
			$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_$no");
			if ($check_exist->num_rows() == 1) {
				$data['data'] = $check_exist->row();
				$this->load->view("view_student_card_$no",$data);
			}else{
				$this->load->view("student_card_$no");
			}
		}
	}

	public function submit_card_1(){
		$input = $this->input->post();
		$input['user_id'] = $this->acc_id;


		if (isset($input['have_certificate']) && $input['have_certificate'] == 1) {
			if (isset($_FILES["certificate_file"]["name"]) && !empty($_FILES["certificate_file"]["name"]) )
			{
		        $config = array(
		    		'upload_path' => './ext/student_certificates/',
		    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
		    		'max_size' => 1024,
					'encrypt_name' => TRUE
		    	);

		        $this->load->library('upload', $config);


		        if ($this->upload->do_upload('certificate_file') )
	            {
	            	$input['certificate_name'] = $this->upload->data('file_name');
	            }
			}
		}else{
			$input['certificate_name'] = "";
			$input['have_certificate'] = 0;
		}

		if (isset($input['another_certificate']) && $input['another_certificate'] == 1) {
			if (isset($_FILES["another_certificate_file"]["name"]) && !empty($_FILES["another_certificate_file"]["name"]) )
			{
		        $config = array(
		    		'upload_path' => './ext/student_certificates/',
		    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
		    		'max_size' => 1024,
					'encrypt_name' => TRUE
		    	);

		        $this->load->library('upload', $config);


		        if ($this->upload->do_upload('another_certificate_file') )
	            {
	            	$input['another_certificate_name'] = $this->upload->data('file_name');
	            }
			}
		}else{
			$input['another_certificate_name'] = "";
			$input['another_certificate'] = 0;
		}
		

		if (isset($input['ion_certificate']) && $input['ion_certificate'] == 1) {
			if (isset($_FILES["ion_certificate_file"]["name"]) && !empty($_FILES["ion_certificate_file"]["name"]) )
			{
		        $config = array(
		    		'upload_path' => './ext/student_certificates/',
		    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
		    		'max_size' => 1024,
					'encrypt_name' => TRUE
		    	);

		        $this->load->library('upload', $config);


		        if ($this->upload->do_upload('ion_certificate_file') )
	            {
	            	$input['ion_certificate_file'] = $this->upload->data('file_name');
	            }
			}
		}else{
			$input['ion_certificate_file'] = "";
			$input['ion_certificate'] = 0;
		}

		if (isset($input['experience_certificate']) && $input['experience_certificate'] == 1) {
			if (isset($_FILES["experience_certificate_file"]["name"]) && !empty($_FILES["experience_certificate_file"]["name"]) )
			{
		        $config = array(
		    		'upload_path' => './ext/student_certificates/',
		    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
		    		'max_size' => 1024,
					'encrypt_name' => TRUE
		    	);

		        $this->load->library('upload', $config);


		        if ($this->upload->do_upload('experience_certificate_file') )
	            {
	            	$input['experience_certificate_file'] = $this->upload->data('file_name');
	            }
			}
		}else{
			$input['experience_certificate_file'] = "";
			$input['experience_certificate'] = 0;
		}
			

		$this->db->trans_start();

		$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_1');

		if ($check_exist->num_rows() == 0) {
			$this->db->insert('card_1',$input);
		}else{
			if ($check_exist->row()->edit_allow) {
				$this->db->where('user_id',$this->acc_id)->update('card_1',$input);
			}
		}

		$this->db->trans_complete();

		if ($this->db->trans_status() === true) {
			redirect('student/card/1');
		}else{
			$data['message'] = 'Error happened, try again later';
			$this->load->view("student_card_1",$data);
		}

	}
}