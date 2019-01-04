<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	var $acc_id;
	var $acc_name;
	var $elapsed_time = 0;
	public function __construct(){
		parent::__construct();
		$student_signed_in = $this->session->userdata('student_signed_in');

		if ($student_signed_in != 'true') {
			redirect('student_login');
		}else{
		
			$acc_id = $this->session->userdata('student_acc_id');
			$check_query = $this->db->where('id',$acc_id)->get('students');
			if ($check_query->num_rows() == 1) {
				$account = $check_query->row();
				if ($account->active == 1) {
					$this->acc_id = $account->id;
					$this->acc_name = $account->firstname." ".$account->lastname;
					$this->load->model('Student_model');
					$last_visit_id = $this->db->where('student_id',$this->acc_id)->order_by('id','DESC')->get('student_visites')->row()->id;
					$this->db->where('id',$last_visit_id)->set('last_action_time',time())->update('student_visites');
					$this->elapsed_time = $this->Student_model->get_student_elapsed_time();
				}else{
					$this->session->sess_destroy();
					redirect('student_login');
				}
			}else{
				$this->session->sess_destroy();
				redirect('student_login');
			}
		}
	}

	public function index()
	{
		$view = $this->load->view("student/student_home",'',true);
		$this->page->fix_view_template_text($view);
	}

	/*public function wleknfwlnwiecnacwbeicubal(){
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');

		$time = date('r');
		echo "data: The server time is: {$time}\n\n";
		flush();
	}*/

	public function authenticate()
	{
		$this->session->set_userdata('student_acc_id',$this->acc_id);
		$this->session->set_userdata('student_signed_in','true');
		$time = date('r');
		echo json_encode("data: The server time is: {$time}\n\n");
	}
	
	public function logout()
	{
		$this->session->unset_userdata('student_acc_id');
		$this->session->unset_userdata('student_signed_in');
		redirect('site');
	}


	public function card_1(){
		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 1;
		$data['page_type'] = 'card';

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;
			
			if (isset($input['have_certificate']) && $input['have_certificate'] == 1) {
				if (isset($_FILES["certificate_file"]["name"]) && !empty($_FILES["certificate_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx',
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
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
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
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
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
				$input['ion_certificate_name'] = "";
			}

			if (isset($input['experience_certificate']) && $input['experience_certificate'] == 1) {
				if (isset($_FILES["experience_certificate_file"]["name"]) && !empty($_FILES["experience_certificate_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
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
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_1',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_1");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_1",$data,true);

		$this->page->fix_view_template_text($view,$page_no=1);
	}

	public function card_2(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_1')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 2;
		$data['page_type'] = 'card';

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
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_2',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_2");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_2",$data,true);

		$this->page->fix_view_template_text($view,$page_no=2);
	}

	public function card_3(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_2')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 3;
		$data['page_type'] = 'card';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_3');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_3',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_3',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_3");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_3",$data,true);

		$this->page->fix_view_template_text($view,$page_no=3);
	}

	public function card_4(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_3')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 4;
		$data['page_type'] = 'card';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			if (isset($_FILES["job_offer_1_file"]["name"]) && !empty($_FILES["job_offer_1_file"]["name"]) )
			{
			    $config = array(
					'upload_path' => './ext/student_documents/',
					'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
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
					'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
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


			if (isset($input['job_offer_1_yes_no'])) {

				if ($input['job_offer_1_yes_no'] == 1) {
					$input['job_offer_1_reason'] = $input['job_offer_1_reason_yes'];
				}

				if($input['job_offer_1_yes_no'] == 0){
					$input['job_offer_1_reason'] = $input['job_offer_1_reason_no'];
				}
				
			}

			unset($input['job_offer_1_reason_yes']);
			unset($input['job_offer_1_reason_no']);

		
			if (isset($input['job_offer_2_yes_no'])) {
				if ($input['job_offer_2_yes_no'] == 1) {
					$input['job_offer_2_reason'] = $input['job_offer_2_reason_yes'];
					
				}
				if($input['job_offer_2_yes_no'] == 0){
					$input['job_offer_2_reason'] = $input['job_offer_2_reason_no'];
				}
				
			}

			unset($input['job_offer_2_reason_yes']);
			unset($input['job_offer_2_reason_no']);

			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_4');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_4',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_4',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_4");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_4",$data,true);

		$this->page->fix_view_template_text($view,$page_no=4);
	}

	public function card_5(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_4')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 5;
		$data['page_type'] = 'card';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			if (!isset($input['one_course']) || empty($input['one_course'])) {
				$input['one_course'] = 0;
			}

			if (!isset($input['one_complate_training']) || empty($input['one_complate_training'])) {
				$input['one_complate_training'] = 0;
			}

			if (!isset($input['training_one_year']) || empty($input['training_one_year'])) {
				$input['training_one_year'] = 0;
			}

			if (!isset($input['training_multi_year']) || empty($input['training_multi_year'])) {
				$input['training_multi_year'] = 0;
			}

			if (!isset($input['days_work']) || empty($input['days_work'])) {
				$input['days_work'] = 0;
			}

			if (!isset($input['days_school']) || empty($input['days_school'])) {
				$input['days_school'] = 0;
			}

			if (!isset($input['course_full_time']) || empty($input['course_full_time'])) {
				$input['course_full_time'] = 0;
			}

			if (!isset($input['course_part_time']) || empty($input['course_part_time'])) {
				$input['course_part_time'] = 0;
			}

			if (!isset($input['in_day']) || empty($input['in_day'])) {
				$input['in_day'] = 0;
			}

			if (!isset($input['at_night']) || empty($input['at_night'])) {
				$input['at_night'] = 0;
			}

			if (!isset($input['at_school']) || empty($input['at_school'])) {
				$input['at_school'] = 0;
			}

			if (!isset($input['at_home']) || empty($input['at_home'])) {
				$input['at_home'] = 0;
			}

			if (!isset($input['no_diploma']) || empty($input['no_diploma'])) {
				$input['no_diploma'] = 0;
			}

			if (!isset($input['can_pay']) || empty($input['can_pay'])) {
				$input['can_pay'] = 0;
			}

			if (!isset($input['owner_pay']) || empty($input['owner_pay'])) {
				$input['owner_pay'] = 0;
			}


			if (!isset($input['can_speak_with_people']) || empty($input['can_speak_with_people'])) {
				$input['can_speak_with_people'] = 0;
			}

			if (!isset($input['instructions']) || empty($input['instructions'])) {
				$input['instructions'] = 0;
			}

			if (!isset($input['meet']) || empty($input['meet'])) {
				$input['meet'] = 0;
			}

			if (!isset($input['email']) || empty($input['email'])) {
				$input['email'] = 0;
			}

			if (!isset($input['telephone']) || empty($input['telephone'])) {
				$input['telephone'] = 0;
			}

			if (!isset($input['report']) || empty($input['report'])) {
				$input['report'] = 0;
			}

			if (!isset($input['speak_client']) || empty($input['speak_client'])) {
				$input['speak_client'] = 0;
			}

			if (!isset($input['contact_colleague']) || empty($input['contact_colleague'])) {
				$input['contact_colleague'] = 0;
			}

			if (!isset($input['work_paper']) || empty($input['work_paper'])) {
				$input['work_paper'] = 0;
			}

			if (!isset($input['short_report']) || empty($input['short_report'])) {
				$input['short_report'] = 0;
			}

			if (!isset($input['study_lang']) || empty($input['study_lang'])) {
				$input['study_lang'] = 0;
			}

			if (!isset($input['study_lang_no']) || empty($input['study_lang_no'])) {
				$input['study_lang_no'] = 0;
			}


			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_5');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_5',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_5',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_5");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_5",$data,true);

		$this->page->fix_view_template_text($view,$page_no=5);
	}

	public function card_6(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_5')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 6;
		$data['page_type'] = 'card';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			if (!isset($input['close_friend']) || empty($input['close_friend'])) {
				$input['close_friend'] = 0;
			}

			if (!isset($input['colleague']) || empty($input['colleague'])) {
				$input['colleague'] = 0;
			}

			if (!isset($input['study_friend']) || empty($input['study_friend'])) {
				$input['study_friend'] = 0;
			}

			if (!isset($input['sports_club_friend']) || empty($input['sports_club_friend'])) {
				$input['sports_club_friend'] = 0;
			}

			if (!isset($input['parents']) || empty($input['parents'])) {
				$input['parents'] = 0;
			}

			if (!isset($input['another_parents']) || empty($input['another_parents'])) {
				$input['another_parents'] = 0;
			}

			if (!isset($input['client_manger']) || empty($input['client_manger'])) {
				$input['client_manger'] = 0;
			}

			if (!isset($input['knowledge']) || empty($input['knowledge'])) {
				$input['knowledge'] = 0;
			}

			if (!isset($input['friend']) || empty($input['friend'])) {
				$input['friend'] = 0;
			}

			if (!isset($input['family']) || empty($input['family'])) {
				$input['family'] = 0;
			}

			if (!isset($input['no_one_help_me']) || empty($input['no_one_help_me'])) {
				$input['no_one_help_me'] = 0;
			}

			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_6');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_6',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_6',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_6");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_6",$data,true);

		$this->page->fix_view_template_text($view,$page_no=6);
	}

	public function card_7(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_6')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 7;
		$data['page_type'] = 'card';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			if (!isset($input['vacancies']) || empty($input['vacancies'])) {
				$input['vacancies'] = 0;
			}

			if (!isset($input['open_application']) || empty($input['open_application'])) {
				$input['open_application'] = 0;
			}

			if (isset($input['app_form_work']) && $input['app_form_work'] == 1) {
				if (isset($_FILES["app_form_work_file"]["name"]) && !empty($_FILES["app_form_work_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('app_form_work_file') )
		            {
		            	$input['app_form_work_file'] = $this->upload->data('file_name');
		            }
				}
			}else{
				$input['app_form_work_file'] = "";
				$input['app_form_work'] = 0;
			}

			if (isset($input['app_form_another_work']) && $input['app_form_another_work'] == 1) {
				if (isset($_FILES["app_form_another_work_file_1"]["name"]) && !empty($_FILES["app_form_another_work_file_1"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('app_form_another_work_file_1') )
		            {
		            	$input['app_form_another_work_file_1'] = $this->upload->data('file_name');
		            }
				}

				if (isset($_FILES["app_form_another_work_file_2"]["name"]) && !empty($_FILES["app_form_another_work_file_2"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('app_form_another_work_file_2') )
		            {
		            	$input['app_form_another_work_file_2'] = $this->upload->data('file_name');
		            }
				}
			}else{
				$input['app_form_another_work_file_1'] = "";
				$input['app_form_another_work_file_2'] = "";
				$input['app_form_another_work'] = 0;
			}

			if (isset($input['motivation']) && $input['motivation'] == 1) {
				if (isset($_FILES["motivation_file"]["name"]) && !empty($_FILES["motivation_file"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('motivation_file') )
		            {
		            	$input['motivation_file'] = $this->upload->data('file_name');
		            }
				}
			}else{
				$input['motivation_file'] = "";
				$input['motivation'] = 0;
			}

			if (isset($input['have_cv']) && $input['have_cv'] == 1) {
				if (isset($_FILES["cv"]["name"]) && !empty($_FILES["cv"]["name"]) )
				{
			        $config = array(
			    		'upload_path' => './ext/student_documents/',
			    		'allowed_types' => 'jpg|png|jpeg|bmp|pdf|doc|docx|',
			    		'max_size' => 1024,
						'encrypt_name' => TRUE
			    	);

			        $this->load->library('upload', $config);


			        if ($this->upload->do_upload('cv') )
		            {
		            	$input['cv'] = $this->upload->data('file_name');
		            }
				}
			}else{
				$input['cv'] = "";
				$input['have_cv'] = 0;
			}


			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_7');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_7',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_7',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_7");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_7",$data,true);

		$this->page->fix_view_template_text($view,$page_no=7);
	}

	public function card_8(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_7')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}

		$data = array();
		$data['cards_status'] = $this->Student_model->get_cards_status();
		$data['card_number'] = 8;
		$data['page_type'] = 'card';
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $this->input->post();
			$input['user_id'] = $this->acc_id;

			$this->db->trans_start();

			$check_exist = $this->db->where('user_id',$this->acc_id)->get('card_8');

			if ($check_exist->num_rows() == 0) {
				$this->db->insert('card_8',$input);
			}else{
				if ($check_exist->row()->edit_allow) {
					$this->db->set('needs_correction_by_student',0);
					$this->db->where('user_id',$this->acc_id)->update('card_8',$input);
				}
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$data['message'] = "";
			}else{
				$data['message'] = 'Error happened, try again later.';
			}
		}

		$check_exist = $this->db->where('user_id',$this->acc_id)->get("card_8");

		if ($check_exist->num_rows() == 1) {
			$data['data'] = $check_exist->row();
		}

		$view = $this->load->view("student/student_card_8",$data,true);

		$this->page->fix_view_template_text($view,$page_no=8);
	}

	public function lesson($no){
		if ($no >= 1 && $no <= 8) {
			$data = array();
			if ($no > 1) {
				$previous_card = $no-1;
				$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get("card_$previous_card")->num_rows();

				if ($check_previous_is_completed == 0) {
					echo "Sorry, you can't take this card yet.";
					die();
				}
			}
			$data['cards_status'] = $this->Student_model->get_cards_status();
			$data['card_number'] = $no;
			$data['page_type'] = 'lesson';
			$view = $this->load->view("student/student_lesson_$no",$data,true);
			$this->page->fix_view_template_text($view,$page_no=$no);
		}
	}

	public function explanation_card($no){
		if ($no >= 1 && $no <= 8) {
			$data = array();
			if ($no > 1) {
				$previous_card = $no-1;
				$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get("card_$previous_card")->num_rows();

				if ($check_previous_is_completed == 0) {
					echo "Sorry, you can't take this card yet.";
					die();
				}
			}
			$data['cards_status'] = $this->Student_model->get_cards_status();
			$data['card_number'] = $no;
			$data['page_type'] = 'explanation_card';
			$view = $this->load->view("student/word_$no",$data,true);
			$this->page->fix_view_template_text($view,$page_no=$no);
		}
	}

	public function create_pdf_employment_letter($letter_id)
    {
       	//load library
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        /*Arabic support*/
        $pdf->allow_charset_conversion = false;  // Set by default to TRUE
		$pdf->charset_in = 'UTF-8';
		$pdf->SetDirectionality('ltr');
		$pdf->autoLangToFont = true;
		$pdf->autoScriptToLang = true;
		/*Arabic support*/
       	// retrieve data from model
        $data['letter_details'] = $this->db->where('id',$letter_id)->get('employment_letter_template')->row();
		$data['acc_info'] = $this->db->where('id',$this->acc_id)->get('students')->row();
        /*ini_set('memory_limit', '256M');*/
       	// boost the memory limit if it's low ;)
        $html = $this->load->view('student/student_employment_letter_template',$data,true);
       	// render the view into HTML
        $pdf->WriteHTML($html); // write the HTML into the PDF
        $output = $data['acc_info']->username.'_'.$letter_id.'_'. bin2hex(openssl_random_pseudo_bytes(16)) . '_.pdf';
        $pdf->Output('./ext/employment_letters_pdfs/'.$output,'F'); // save to file because we can
        return $output;
    }

	public function employment_letter_form(){
		$check_previous_is_completed = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_6')->num_rows();

		if ($check_previous_is_completed == 0) {
			echo "Sorry, you can't take this card yet.";
			die();
		}else{

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$input = $this->input->post();
				$input['student_id'] = $this->acc_id;


				$this->db->trans_start();
				$this->db->insert('employment_letter_template',$input);
				$letter_id = $this->db->insert_id();
				$this->db->trans_complete();

				if ($this->db->trans_status() === true) {
					
					$pdf_file = $this->create_pdf_employment_letter($letter_id);

					$path = APPPATH . '../ext/employment_letters_pdfs/'.$pdf_file;
					if (file_exists($path)) {
						$this->load->helper('download');
						$data = file_get_contents($path);
		    			$name = 'Whoffice employment letter.pdf';
		        		force_download($name, $data);
		        		redirect('student/card_7');
					}

				}else{
					$data['message'] = 'Error happened, try again later.';
				}
			}

			$student = $this->db->where('id',$this->acc_id)->get('students')->row();
			$data['student'] = $student;
			$view = $this->load->view("student/student_employment_letter_form",$data,true);
			$this->page->fix_view_template_text($view);
		}
	}

	public function exams(){
		$data['exams'] = $this->db->get('exams')->result();
		$view = $this->load->view("student/exams",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function exam($exam_id){
		$data = array();
		$exam_query = $this->db->where('id',$exam_id)->get('exams');

		if ($exam_query->num_rows() > 0) {
			$already_have_answers = $this->db->where('exam_id',$exam_id)->where('student_id',$this->acc_id)->get('students_exam_answsers')->num_rows();
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				if ($already_have_answers == 0) {
					foreach ($_POST as $question_id => $answers_id) {
						$this->db->set('exam_id',$exam_id)->set('student_id',$this->acc_id)->set('question_id',$question_id)->set('answer_id',$answers_id)->insert('students_exam_answsers');
					}
					redirect("student/exam/$exam_id");
				}
			}

			$data['exam'] = $exam_query->row();
			$data['already_have_answers'] = $already_have_answers;
			$data['questions'] = $this->db->where('exam_id',$exam_id)->order_by('question_no','ASC')->get('exams_questions')->result();
			if (count($data['questions']) > 0) {
				foreach ($data['questions'] as $key => &$question) {
					$question->answers = $this->db->where('question_id',$question->id)->order_by('answer_no','ASC')->get('exams_questions_answers')->result();
					if ($already_have_answers > 0) {
						$student_answer_query = $this->db->where('exam_id',$exam_id)->where('student_id',$this->acc_id)->where('question_id',$question->id)->get('students_exam_answsers');
						if ($student_answer_query->num_rows() > 0) {
							$question->student_answer_id = $student_answer_query->row()->answer_id;
						}else{
							$question->student_answer_id = 0;
						}
					}else{
						$question->student_answer_id = 0;
					}
				}
				$view = $this->load->view("student/exam",$data,true);
				$this->page->fix_view_template_text($view);
			}

		}
	}
}