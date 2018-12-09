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

	public function card_1(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			if (isset($input['have_certificate']) && $input['have_certificate'] == 1) {
				if (isset($_FILES["certificate_file"]["name"]) && !empty($_FILES["certificate_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('certificate_file') )
		            {
		            	$input['certificate_name'] = $this->upload->data('file_name');
		            }
				}else{
					$input['certificate_name'] = "";
					$input['have_certificate'] = 0;
				}
			}else{
				$input['certificate_name'] = "";
				$input['have_certificate'] = 0;
			}

			if (isset($input['another_certificate']) && $input['another_certificate'] == 1) {
				if (isset($_FILES["another_certificate_file"]["name"]) && !empty($_FILES["another_certificate_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('another_certificate_file') )
		            {
		            	$input['another_certificate_name'] = $this->upload->data('file_name');
		            }
				}else{
					$input['another_certificate_name'] = "";
				$input['another_certificate'] = 0;
				}
			}else{
				$input['another_certificate_name'] = "";
				$input['another_certificate'] = 0;
			}
			

			if (isset($input['ion_certificate']) && $input['ion_certificate'] == 1) {
				if (isset($_FILES["ion_certificate_file"]["name"]) && !empty($_FILES["ion_certificate_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('ion_certificate_file') )
		            {
		            	$input['ion_certificate_file'] = $this->upload->data('file_name');
		            }
				}else{
					$input['ion_certificate_file'] = "";
					$input['ion_certificate'] = 0;
					$input['ion_certificate_name'] = "";
				}
			}else{
				$input['ion_certificate_file'] = "";
				$input['ion_certificate'] = 0;
				$input['ion_certificate_name'] = "";
			}

			if (isset($input['experience_certificate']) && $input['experience_certificate'] == 1) {
				if (isset($_FILES["experience_certificate_file"]["name"]) && !empty($_FILES["experience_certificate_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('experience_certificate_file') )
		            {
		            	$input['experience_certificate_file'] = $this->upload->data('file_name');
		            }
				}else{
					$input['experience_certificate_file'] = "";
					$input['experience_certificate'] = 0;
				}
			}else{
				$input['experience_certificate_file'] = "";
				$input['experience_certificate'] = 0;
			}

			if (!isset($input['have_certificate_cannot_view']) || empty($input['have_certificate_cannot_view'])) {
				$input['have_certificate_cannot_view'] = 0;
			}

			if (!isset($input['no_experience_certificate']) || empty($input['no_experience_certificate'])) {
				$input['no_experience_certificate'] = 0;
			}

			if (!isset($input['work_with_certificate']) || empty($input['work_with_certificate'])) {
				$input['work_with_certificate'] = 0;
			}

			if (!isset($input['experience']) || empty($input['experience'])) {
				$input['experience'] = 0;
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
				$data['message'] = 'Done.';
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_1");
		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
			$this->load->view("view_student_card_1",$data);
		}else{
			$this->load->view("student_card_1");
		}
	}

	public function card_2(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;


			if (!isset($input['work_with_team']) || empty($input['work_with_team'])) {
				$input['work_with_team'] = 0;
			}

			if (!isset($input['same_work_time']) || empty($input['same_work_time'])) {
				$input['same_work_time'] = 0;
			}

			if (!isset($input['alot_of_mony']) || empty($input['alot_of_mony'])) {
				$input['alot_of_mony'] = 0;
			}

			if (!isset($input['uniform']) || empty($input['uniform'])) {
				$input['uniform'] = 0;
			}

			if (!isset($input['travel_far']) || empty($input['travel_far'])) {
				$input['travel_far'] = 0;
			}

			if (!isset($input['work_one_place']) || empty($input['work_one_place'])) {
				$input['work_one_place'] = 0;
			}

			if (!isset($input['with_materials']) || empty($input['with_materials'])) {
				$input['with_materials'] = 0;
			}

			if (!isset($input['is_dangerous']) || empty($input['is_dangerous'])) {
				$input['is_dangerous'] = 0;
			}

			if (!isset($input['physical_work']) || empty($input['physical_work'])) {
				$input['physical_work'] = 0;
			}

			if (!isset($input['work_outside']) || empty($input['work_outside'])) {
				$input['work_outside'] = 0;
			}

			if (!isset($input['work_at_night']) || empty($input['work_at_night'])) {
				$input['work_at_night'] = 0;
			}

			if (!isset($input['work_weekend']) || empty($input['work_weekend'])) {
				$input['work_weekend'] = 0;
			}

			if (!isset($input['driving_license']) || empty($input['driving_license'])) {
				$input['driving_license'] = 0;
			}

			if (!isset($input['speake_another_lang']) || empty($input['speake_another_lang'])) {
				$input['speake_another_lang'] = 0;
			}

			if (!isset($input['sport']) || empty($input['sport'])) {
				$input['sport'] = 0;
			}

			if (!isset($input['swimming_diploma']) || empty($input['swimming_diploma'])) {
				$input['swimming_diploma'] = 0;
			}

			if (!isset($input['in_my_home']) || empty($input['in_my_home'])) {
				$input['in_my_home'] = 0;
			}

			if (!isset($input['in_my_health']) || empty($input['in_my_health'])) {
				$input['in_my_health'] = 0;
			}

			if (!isset($input['in_my_age']) || empty($input['in_my_age'])) {
				$input['in_my_age'] = 0;
			}

			if (!isset($input['in_my_motivation']) || empty($input['in_my_motivation'])) {
				$input['in_my_motivation'] = 0;
			}

			if (!isset($input['in_my_address']) || empty($input['in_my_address'])) {
				$input['in_my_address'] = 0;
			}



			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_2');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_2',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->where('user_id',$this->acc_id)->update('card_2',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = 'Done.';
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_2");
		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
			$this->load->view("view_student_card_2",$data);
		}else{
			$this->load->view("student_card_2");
		}
	}

	public function card_3(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_3');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_3',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->where('user_id',$this->acc_id)->update('card_3',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = 'Done.';
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_3");
		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
			$this->load->view("view_student_card_3",$data);
		}else{
			$this->load->view("student_card_3");
		}
	}

	public function card_4(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;


			if (isset($_FILES["job_offer_1_file"]["name"]) && !empty($_FILES["job_offer_1_file"]["name"]) )
			{
			    $config = array(
					'upload_path' => './ext/student_documents/',
					'allowed_types' => 'gif|jpg|png|jpeg|bmp',
					'max_size' => 1024,
					'encrypt_name' => TRUE
				);

			    $this->load->library('upload', $config);


			    if ($this->upload->do_upload('job_offer_1_file') )
		        {
		        	$input['job_offer_1_file'] = $this->upload->data('file_name');
		        }
			}

			if (isset($_FILES["job_offer_2_file"]["name"]) && !empty($_FILES["job_offer_2_file"]["name"]) )
			{
			    $config = array(
					'upload_path' => './ext/student_documents/',
					'allowed_types' => 'gif|jpg|png|jpeg|bmp',
					'max_size' => 1024,
					'encrypt_name' => TRUE
				);

			    $this->load->library('upload', $config);


			    if ($this->upload->do_upload('job_offer_2_file') )
		        {
		        	$input['job_offer_2_file'] = $this->upload->data('file_name');
		        }
			}

			if (!isset($input['is_enough_work']) || empty($input['is_enough_work'])) {
				$input['is_enough_work'] = 0;
			}




			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_4');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_4',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->where('user_id',$this->acc_id)->update('card_4',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = 'Done.';
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_4");
		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
			$this->load->view("view_student_card_4",$data);
		}else{
			$this->load->view("student_card_4");
		}
	}
}