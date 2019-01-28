<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	var $acc_id;
	var $acc_name;
	public function __construct(){
		parent::__construct();
		$teacher_signed_in = $this->session->userdata('teacher_signed_in');
		if ($teacher_signed_in != 'true') {
			redirect('admin_login');
		}else{
			$acc_id = $this->session->userdata('teacher_acc_id');
			$check_query = $this->db->where('id',$acc_id)->get('teachers');
			if ($check_query->num_rows() == 1) {
				$account = $check_query->row();
				if ($account->active == 1) {
					$this->acc_id = $account->id;
					$this->acc_name = $account->firstname." ".$account->lastname;
					$this->load->model('Teacher_model');
				}else{
					$this->session->sess_destroy();
					redirect('admin_login');
				}
			}else{
				$this->session->sess_destroy();
				redirect('admin_login');
			}
		}
	}

	public function index()
	{
		$view = $this->load->view("teacher/teacher_home",'',true);
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
		$this->session->set_userdata('teacher_acc_id',$this->acc_id);
		$this->session->set_userdata('teacher_signed_in','true');
		$time = date('r');
		echo json_encode("data: The server time is: {$time}\n\n");
	}

	public function logout()
	{
		$this->session->unset_userdata('teacher_acc_id');
		$this->session->unset_userdata('teacher_signed_in');
		redirect('admin_login');
	}


	public function db_backup(){
		$this->load->dbutil();
		set_time_limit(5*60);
		$backup = $this->dbutil->backup();
		$this->load->helper('file');
		$backup_file_name = 'backup_'.Date('Y-m-d_h-i-s').'.gz';
		/*SET FOREIGN_KEY_CHECKS = 0;
		SET FOREIGN_KEY_CHECKS = 1;*/
		write_file('db_backups/'.$backup_file_name, $backup);
		$this->load->helper('download');
		force_download($backup_file_name, $backup);
		set_time_limit(30);
	}

	public function view_pages_texts(){
		$data = array();
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



		$view = $this->load->view("teacher/pages_texts",$data,true);

		$this->page->fix_view_template_text($view);

	}



	public function alter_page_text($id){

		$data = array();

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

			$view = $this->load->view("teacher/alter_page_text",$data,true);

			$this->page->fix_view_template_text($view);



		}else{

			echo "Not found.";

		}

	}



	public function check_students_pending_cards(){

		$data['pending_cards'] = $this->Teacher_model->get_pending_cards();

		$view = $this->load->view("teacher/pending_cards",$data,true);

		$this->page->fix_view_template_text($view);

	}


	public function check_card($student_id,$card_no,$from){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$alter_answers = $this->input->post('alter_answers');
			if ($alter_answers == "yes") {
				unset($_POST['lock_card']);
				unset($_POST['needs_correction_by_student']);
				unset($_POST['alter_answers']);
				unset($_POST['correction_notes']);

				if ($card_no == 1) {
					$input = $this->input->post();
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
				            	$input['certificate_name_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['certificate_name'] = "";
						$input['certificate_name_caption'] = "";
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
				            	$input['another_certificate_name_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['another_certificate_name'] = "";
						$input['another_certificate_name_caption'] = "";
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
				            	$input['ion_certificate_file_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['ion_certificate_file'] = "";
						$input['ion_certificate_file_caption'] = "";
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
				            	$input['experience_certificate_file_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['experience_certificate_file'] = "";
						$input['experience_certificate_file_caption'] = "";
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

					$this->db->where('user_id',$student_id)->update('card_1',$input);
				}

				if ($card_no == 2) {
					$input = $this->input->post();

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

					$this->db->where('user_id',$student_id)->update('card_2',$input);
				}

				if ($card_no == 3) {
					$input = $this->input->post();
					$this->db->where('user_id',$student_id)->update('card_3',$input);
				}

				if ($card_no == 4) {
					$input = $this->input->post();
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
				        	$input['job_offer_1_file_caption'] = $this->upload->data('orig_name');
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
				        	$input['job_offer_2_file_caption'] = $this->upload->data('orig_name');
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
					$this->db->where('user_id',$student_id)->update('card_4',$input);
				}

				if ($card_no == 5) {
					$input = $this->input->post();
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

					$this->db->where('user_id',$student_id)->update('card_5',$input);
				}

				if ($card_no == 6) {
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

					$this->db->where('user_id',$student_id)->update('card_6',$input);
				}

				if ($card_no == 7) {
					$input = $this->input->post();

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
				            	$input['app_form_work_file_caption'] = $this->upload->data('orig_name');
				            }
						}
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
				            	$input['app_form_another_work_file_1_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['app_form_work_file'] = "";
						$input['app_form_work_file_caption'] = "";
						$input['app_form_work'] = 0;
						$input['app_form_another_work_file_1'] = "";
						$input['app_form_another_work_file_1_caption'] = "";
					}

					if (isset($input['app_form_another_work']) && $input['app_form_another_work'] == 1) {
						

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
				            	$input['app_form_another_work_file_2_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						
						$input['app_form_another_work_file_2'] = "";
						
						$input['app_form_another_work_file_2_caption'] = "";
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
				            	$input['motivation_file_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['motivation_file'] = "";
						$input['motivation_file_caption'] = "";
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
				            	$input['cv_caption'] = $this->upload->data('orig_name');
				            }
						}
					}else{
						$input['cv'] = "";
						$input['cv_caption'] = "";
						$input['have_cv'] = 0;
					}

					$this->db->where('user_id',$student_id)->update('card_7',$input);
				}

				if ($card_no == 8) {
					$input = $this->input->post();
					$this->db->where('user_id',$student_id)->update('card_8',$input);
				}
			}else{
				$lock_card = $this->input->post('lock_card');
				if ($lock_card == "yes") {
					$this->db->set('edit_allow',0)->set('checked_with_teacher',1)->set('needs_correction_by_student',0);
				}else{

					$needs_correction_by_student = $this->input->post('needs_correction_by_student');

					if ($needs_correction_by_student == "yes") {

						$correction_notes = $this->input->post('correction_notes');

						$this->db->set('correction_notes',$correction_notes)->set('needs_correction_by_student',1);

					}else{

						$this->db->set('checked_with_teacher',1)->set('needs_correction_by_student',0);

					}

					$this->db->set('edit_allow',1);
				}
				$this->db->where('user_id',$student_id)->update("card_$card_no");

				if ($this->db->affected_rows() > 0 ) {

					$student_id = $this->db->where('user_id',$student_id)->get("card_$card_no")->row()->user_id;

					$student = $this->db->where('id',$student_id)->get('students')->row();
					/*Send email here*/
					$msg = '<html lang="NL">
					    <head>
					    <title></title>
					    </head>
					     <body>
					     <div style="text-align: right; direction: rtl;">
	                        <p>مرحباً</p>
	        
	                        <p>لقد تم إصلاح كرتك . يرجى مراجعة الكرت ضمن الموقع وشكراً </p>
	                        
	                        <p>مع تحيات إدارة المدرسة  .</p>
	    
	                    </div>

					        <p>Hallo <b>'.$student->firstname.' '.$student->lastname.'</b></p>
					      
					        <p>Uw resultaatkaart is gecorrigeerd. U kunt de correctie bij de website zien.</p>
					        <p>Directie van de school</p>
					    </body>
					</html>';

					$subject = "Whoffice Card Informaion.";

					$this->Teacher_model->send_email($student->email,$msg,$subject);
				}else{
					echo "Sorry, error.";
				}
			}

			if ($from == "pending_cards") {
				redirect('admin/check_students_pending_cards');
			}else if($from == "statistics"){
				redirect('admin/check_students_statistics');
			}
		}

		$card_details_query = $this->db->where('user_id',$student_id)->get("card_$card_no");

		if ($card_details_query->num_rows() == 1) {

			$data['data'] = $card_details_query->row();

			$data['opened_for_teacher_checking'] = true;

			$view = $this->load->view("student/student_card_$card_no",$data,true);

			$this->page->fix_view_template_text($view,$page_no=$card_no);

		} else {

			echo "Sorry, card isn't found.";

		}
	}

	public function remove_file($card_no,$student_id,$file){
		$this->db->where('user_id',$student_id);
		if($file == "certificate_file"){
			$input['certificate_name'] = "";
			$input['certificate_name_caption'] = "";
			/*$input['have_certificate'] = 0;*/
		}

		if($file == "another_certificate_file"){
			$input['another_certificate_name'] = "";
			$input['another_certificate_name_caption'] = "";
			/*$input['another_certificate'] = 0;*/
		}

		if($file == "ion_certificate_file"){
			$input['ion_certificate_file'] = "";
			$input['ion_certificate_file_caption'] = "";
			/*$input['ion_certificate'] = 0;
			$input['ion_certificate_name'] = "";*/
		}

		if($file == "experience_certificate_file"){
			$input['experience_certificate_file'] = "";
			$input['experience_certificate_file_caption'] = "";
			/*$input['experience_certificate'] = 0;*/
		}

		if($file == "job_offer_1_file"){
			$input['job_offer_1_file'] = "";
		    $input['job_offer_1_file_caption'] = "";
		}

		if($file == "job_offer_2_file"){
			$input['job_offer_2_file'] = "";
		    $input['job_offer_2_file_caption'] = "";
		}

		if($file == "app_form_work_file"){
			$input['app_form_work_file'] = "";
			$input['app_form_work_file_caption'] = "";
		}

		if($file == "app_form_another_work_file_1"){
			$input['app_form_another_work_file_1'] = "";
			$input['app_form_another_work_file_1_caption'] = "";
			
		}

		if($file == "app_form_another_work_file_2"){
			$input['app_form_another_work_file_2'] = "";
			$input['app_form_another_work_file_2_caption'] = "";
		}

		if($file == "motivation_file"){
			$input['motivation_file'] = "";
			$input['motivation_file_caption'] = "";
		}

		if($file == "cv"){
			$input['cv'] = "";
			$input['cv_caption'] = "";
		}

		$this->db->update("card_$card_no",$input);

		redirect('admin/check_card/'.$student_id.'/'.$card_no.'/1');
	}

	public function check_students_times(){
		$data['students_times'] = $this->Teacher_model->get_students_times();
		$view = $this->load->view("teacher/student_times",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function check_students_informations($email_count=""){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $this->input->post('id');
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$postal_code = $this->input->post('postal_code');
			$group = $this->input->post('group');

			if (isset($id) && !empty($id)) {
				$this->db->where('id',$id);
			}

			if (isset($firstname) && !empty($firstname)) {
				$this->db->where('firstname',$firstname);
			}

			if (isset($lastname) && !empty($lastname)) {
				$this->db->where('lastname',$lastname);
			}

			if (isset($email) && !empty($email)) {
				$this->db->where('email',$email);
			}

			if (isset($postal_code) && !empty($postal_code)) {
				$this->db->where('postal_code',$postal_code);
			}

			if (isset($group) && !empty($group)) {
				$this->db->where('student_group',$group);
			}
		}

		if (!empty($email_count)) {
			$data['message'] = "$email_count email(s) are scheduled to send successfully.";
		}

		$data['students'] = $this->db->get('students')->result();
		$view = $this->load->view("teacher/students_informations",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function send_all_students_informations(){
		$students = $this->db->get('students');
		$emails_to_sent_count = 0;
		if ($students->num_rows() > 0 ) {
			foreach ($students->result() as $key => $student) {
				$data = array();
				$data['email'] = $student->email;
				$data['subject'] = 'Whoffice account information.';
				$msg = '<html lang="NL">
				    <head>
				    <title></title>
				    </head>
				    <body>
		                <div style="text-align: right; direction: rtl;">
		                    <p>أهلا وسهلا</p>
		                    <p>نرحب بك معنا في دورة الأونا ونقدم لك معلومات الدخول  </p>
		                    <p>اسم المستخدم:  <b>'.$student->username.'</b></p>
		                    <p>كلمة المرور: <b>'.$student->postal_code.$student->postal_code.'</b></p>
		                    <p>نتمنى لك التوفيق والنجاح</p>
		                    <p>مع تحيات إدارة المدرسة  .</p>
		                </div>
				        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>
				        <p>Hierbij zijn de gebruikersnaam en het wachtwoord.</p>
				        <p>Gebruikersnaam <b>'.$student->username.'</b></p>
				        <p>Wachtwoord: <b>'.$student->postal_code.$student->postal_code.'</b></p>
				        <p>Wij Wensen u veel succes</p>
				        <p>Directie van de school .</p>
				    </body>
				</html>';
				$data['message'] = $msg;
				$this->db->insert('scheduled_emails_to_sent',$data);
				if ($this->db->affected_rows() > 0 ) {
					$emails_to_sent_count++;
				}
			}
		}
		redirect("admin/check_students_informations/$emails_to_sent_count");
	}

	public function check_students_statistics(){
		$students_times = $this->Teacher_model->get_students_times();

		foreach ($students_times as $key => &$student) {
			$student->last_achieved_card_no = $this->Teacher_model->get_student_last_approved_card_no($student->id);
		}

		$data['data'] = $students_times;

		$view = $this->load->view("teacher/students_statistics",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function send_student_info_mail($student_id){

		$student = $this->db->where('id',$student_id)->get('students')->row();
		$msg = '<html lang="NL">

		    <head>

		    <title></title>

		    </head>

		    <body>
                <div style="text-align: right; direction: rtl;">
                    <p>أهلا وسهلا</p>
    
                    <p>نرحب بك معنا في دورة الأونا ونقدم لك معلومات الدخول  </p>
    
                    <p>اسم المستخدم:  <b>'.$student->username.'</b></p>
    
                    <p>كلمة المرور: <b>'.$student->postal_code.$student->postal_code.'</b></p>
    
                    <p>نتمنى لك التوفيق والنجاح</p>
    
                    <p>مع تحيات إدارة المدرسة  .</p>

                </div>


		        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>

		        <p>Hierbij zijn de gebruikersnaam en het wachtwoord.</p>

		        <p>Gebruikersnaam <b>'.$student->username.'</b></p>

		        <p>Wachtwoord: <b>'.$student->postal_code.$student->postal_code.'</b></p>

		        <p>Wij Wensen u veel succes</p>

		        <p>Directie van de school .</p>

		    </body>
		</html>';

		$subject = "Whoffice Account Informaion.";



		$result = $this->Teacher_model->send_email($student->email,$msg,$subject);

		if ($result == "sent") {
			$data['message'] = "Email is sent successfully.";
			$data['status'] = 1;
		}else{
			$data['status'] = 0;
			$data['message'] = "Sorry, something went wrong.\n$result";
		}

		if (itsAjaxCall()) {
			echo json_encode($data);
		}else{
			$data['students'] = $this->db->get('students')->result();
			$view = $this->load->view("teacher/students_informations",$data,true);
			$this->page->fix_view_template_text($view);
		}

	}

	//Not used anymore.
	/*public function send_student_reset_password_mail($student_id){
		$student = $this->db->where('id',$student_id)->get('students')->row();
		$new_passwrod = $this->Teacher_model->generateRandomString(8);
		$old_password = $student->password;
		$this->db->where('id',$student_id)->set('password',sha1($new_passwrod))->update('students');
		if ($this->db->affected_rows() > 0 ) {

			$msg = '<html lang="NL">

			    <head>

			    <title></title>

			    </head>

			    <body>
                <div style="text-align: right; direction: rtl;">
                    <p>أهلا وسهلا</p>
    
                    <p>نرحب بك معنا في دورة الأونا ونقدم لك معلومات الدخول  </p>
    
                    <p>اسم المستخدم:  <b>'.$student->username.'</b></p>
    
                    <p>كلمة المرور: <b>'.$student->postal_code.$student->postal_code.'</b></p>
    
                    <p>نتمنى لك التوفيق والنجاح</p>
    
                    <p>مع تحيات إدارة المدرسة  .</p>

                </div>


		        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>

		        <p>Hierbij zijn de gebruikersnaam en het wachtwoord.</p>

		        <p>Gebruikersnaam <b>'.$student->username.'</b></p>

		        <p>Wachtwoord: <b>'.$student->postal_code.$student->postal_code.'</b></p>

		        <p>Wij Wensen u veel succes</p>

		        <p>Directie van de school .</p>

		    </body>


			</html>';

			$subject = "Whoffice Account Reset.";
			$result = $this->Teacher_model->send_email($student->email,$msg,$subject);

			if ($result == "sent") {
				$data['message'] = "Email is sent successfully.";
			}else{
				$this->db->where('id',$student_id)->set('password',$old_password)->update('students');
				$data['message'] = "Sorry, something went wrong.<br>$result";
			}

		}else{

			$data['message'] = "Sorry, something went wrong.";

		}

		$data['students'] = $this->db->get('students')->result();

		$view = $this->load->view("teacher/students_informations",$data,true);

		$this->page->fix_view_template_text($view);
	}*/

	public function edit_student($student_id){

		$data = array();

		

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$action = $this->input->post('action');

			$data['result'] = 1;

			

			if ($action == "alter") {

				$input = $this->input->post();

				$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

					'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Brouse_10'

				));

				$this->form_validation->set_rules('lastname', 'LastName', 'trim|required|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

					'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Wayne_10'

				));

				$this->form_validation->set_rules('username', 'UserName', 'trim|required|max_length[100]|regex_match[/[A-Za-z]+\w/]',array(

					'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld john_10',

				));

				$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');



				$this->form_validation->set_rules('postal_code', 'Postal code', 'trim|required|min_length[4]');



				if ($this->form_validation->run() == TRUE){

		        	$firstname = $this->input->post('firstname');

					$lastname = $this->input->post('lastname');

					$username = $this->input->post('username');

					$email = $this->input->post('email');

					$student_group = $this->input->post('student_group');

					$postal_code = $this->input->post('postal_code');

					$password = $postal_code.$postal_code;

					$check_mail = $this->db->where('id !=',$student_id)->where('email',$email)->get('students')->num_rows();
					$check_username = $this->db->where('id !=',$student_id)->where('username',$username)->get('students')->num_rows();


					if ($check_mail != 0) {

						$data['result'] = 0;

						$data['message'] = "This email is already reigstered, enter another one.";

					}else if ($check_username != 0) {

						$data['result'] = 0;

						$data['message'] = "This username is already reigstered, enter another one.";

					}else{

						$this->db->trans_start();

						$this->db->where('id',$student_id)->set('firstname',$firstname)

						->set('lastname',$lastname)->set('username',$username)

						->set('email',$email)->set('postal_code',$postal_code)

						->set('password',sha1($password))

						->set('student_group',$student_group)->update('students');

						$affected_rows = $this->db->affected_rows();

						$this->db->trans_complete();



						if ($this->db->trans_status() === FALSE){

							$data['result'] = 0;

						}else{

							if ($affected_rows > 0) {
								$student = $this->db->where('id',$student_id)->get('students')->row();

								$msg = '<html lang="NL">

								    <head>

								    <title></title>

								    </head>

								    <body>
                                        <div style="text-align: right; direction: rtl;">
                                            <p>أهلا وسهلا</p>
                            
                                            <p>نرحب بك معنا في دورة الأونا ونقدم لك معلومات الدخول  </p>
                            
                                            <p>اسم المستخدم:  <b>'.$student->username.'</b></p>
                            
                                            <p>كلمة المرور: <b>'.$student->postal_code.$student->postal_code.'</b></p>
                            
                                            <p>نتمنى لك التوفيق والنجاح</p>
                            
                                            <p>مع تحيات إدارة المدرسة  .</p>
                        
                                        </div>
                        
                        
                                        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>
                        
                                        <p>Hierbij zijn de gebruikersnaam en het wachtwoord.</p>
                        
                                        <p>Gebruikersnaam <b>'.$student->username.'</b></p>
                        
                                        <p>Wachtwoord: <b>'.$student->postal_code.$student->postal_code.'</b></p>
                        
                                        <p>Wij Wensen u veel succes</p>
                        
                                        <p>Directie van de school .</p>
                        
                                    </body>
								</html>';



								$subject = "Whoffice Account Informaion.";

								$this->Teacher_model->send_email($student->email,$msg,$subject);
							}
						}

					}

		        }else{

		        	$data['result'] = 0;

		        }

			}



			if ($action == "delete") {

				$this->db->where('id',$student_id)->delete('students');

				if ($this->db->affected_rows() == 0) {

					$data['result'] = 0;

				}

				 

			}



			if ($action == "activate") {

				$this->db->where('id',$student_id)->set('active',1)->update('students');

				if ($this->db->affected_rows() == 0) {

					$data['result'] = 0;

				}

			}



			if ($action == "deactivate") {

				$this->db->where('id',$student_id)->set('active',0)->update('students');

				if ($this->db->affected_rows() == 0) {

					$data['result'] = 0;

				}

			}



			if ($data['result'] != 0) {

				redirect('admin/check_students_informations');

			}else{

				if (!isset($data['message'])) {

					$data['message'] = "Sorry, error occurred.";

				}

			}

		}





		$student = $this->db->where('id',$student_id)->get('students');

		if ($student->num_rows() == 1) {

			$data['student'] = $student->row();

			$view = $this->load->view("teacher/student_edit",$data,true);

			$this->page->fix_view_template_text($view);

		}
	}

	public function add_student(){

		$data = array();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$input = $this->input->post();

			$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

				'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Brouse_10'

			));

			$this->form_validation->set_rules('lastname', 'LastName', 'trim|required|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

				'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Wayne_10'

			));

			$this->form_validation->set_rules('username', 'UserName', 'trim|required|max_length[100]|regex_match[/[A-Za-z]+\w/]|is_unique[students.username]',array(

				'is_unique' => 'Deze gebruikersnaam bestaat al. kies alstublieft een andere',

				'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld john_10',

			));



			$this->form_validation->set_rules('postal_code', 'Postal code', 'trim|required|min_length[4]');

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[students.email]',array(

				'is_unique' => 'This email is already reigstered, enter another one.'

			));



			if ($this->form_validation->run() == FALSE)

	        {

				$view = $this->load->view("teacher/student_add",$data,true);

				$this->page->fix_view_template_text($view);

	        }

	        else

	        {

	        	$this->db->trans_start();

	        	$input['password'] = sha1($input['postal_code'].$input['postal_code']);

				$this->db->insert('students',$input);

				$acc_id = $this->db->insert_id();

				$this->db->trans_complete();

				if ($this->db->trans_status() === true) {

					$student = $this->db->where('id',$acc_id)->get('students')->row();

					$msg = '<html lang="NL">

					    <head>

					    <title></title>

					    </head>

					    <body>
                                        <div style="text-align: right; direction: rtl;">
                                            <p>أهلا وسهلا</p>
                            
                                            <p>نرحب بك معنا في دورة الأونا ونقدم لك معلومات الدخول  </p>
                            
                                            <p>اسم المستخدم:  <b>'.$student->username.'</b></p>
                            
                                            <p>كلمة المرور: <b>'.$student->postal_code.$student->postal_code.'</b></p>
                            
                                            <p>نتمنى لك التوفيق والنجاح</p>
                            
                                            <p>مع تحيات إدارة المدرسة  .</p>
                        
                                        </div>
                        
                        
                                        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>
                        
                                        <p>Hierbij zijn de gebruikersnaam en het wachtwoord.</p>
                        
                                        <p>Gebruikersnaam <b>'.$student->username.'</b></p>
                        
                                        <p>Wachtwoord: <b>'.$student->postal_code.$student->postal_code.'</b></p>
                        
                                        <p>Wij Wensen u veel succes</p>
                        
                                        <p>Directie van de school .</p>
                        
                                    </body>

					</html>';



					$subject = "Whoffice New Account Informaion.";

					$this->Teacher_model->send_email($student->email,$msg,$subject);

					header('Location: '.base_url().'admin/check_students_informations');

				}else{

					$data['message'] = 'Er is een fout opgetreden, probeer het later opnieuw';

					$view = $this->load->view("teacher/student_add",$data,true);

					$this->page->fix_view_template_text($view);

				}

	        }

		}else{

			$view = $this->load->view("teacher/student_add",$data,true);

			$this->page->fix_view_template_text($view);

		}
	}

	public function view_raw_card($card_no){
		if ($card_no >= 1 && $card_no <= 8) {
			$data = array();
			$data['only_viewing_texts_for_teacher'] = 1;
			$view = $this->load->view("student/student_card_$card_no",$data,true);
			$this->page->view_raw_card($view,$card_no);
		}else{
			echo "Wrong card No.";
		}
	}

	public function view_fixed_card($card_no){
		if ($card_no >= 1 && $card_no <= 8) {
			$data = array();
			$data['only_viewing_texts_for_teacher'] = 1;
			$view = $this->load->view("student/student_card_$card_no",$data,true);
			$this->page->fix_view_template_text($view,$card_no);
		}else{
			echo "Wrong card No.";
		}
	}

	public function student_time_details($student_id){
		$data['students_times'] = $this->Teacher_model->get_student_times_detials($student_id);
		$data['student_info'] = $this->db->where('id',$student_id)->get('students')->row();
		$data['student_total_time'] = formatSeconds($this->Teacher_model->get_student_elapsed_time($student_id));
		$view = $this->load->view("teacher/student_times_details",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function check_students_groups($email_count=""){
		$data['groups'] = $this->Teacher_model->get_students_groups();
		if (!empty($email_count)) {
			$data['message'] = "$email_count email(s) are scheduled to send successfully.";
		}
		$view = $this->load->view("teacher/students_groups",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function send_group_account_info_email($group=""){
		if (!empty($group)) {
			$group = urldecode($group);
		}
		$students = $this->db->where('student_group',$group)->get('students');
		$emails_to_sent_count = 0;
		if ($students->num_rows() > 0 ) {
			foreach ($students->result() as $key => $student) {
				$data = array();
				$data['email'] = $student->email;
				$data['subject'] = 'Whoffice account information.';
				$msg = '<html lang="NL">
				    <head>
				    <title></title>
				    </head>
				    <body>
		                <div style="text-align: right; direction: rtl;">
		                    <p>أهلا وسهلا</p>
		                    <p>نرحب بك معنا في دورة الأونا ونقدم لك معلومات الدخول  </p>
		                    <p>اسم المستخدم:  <b>'.$student->username.'</b></p>
		                    <p>كلمة المرور: <b>'.$student->postal_code.$student->postal_code.'</b></p>
		                    <p>نتمنى لك التوفيق والنجاح</p>
		                    <p>مع تحيات إدارة المدرسة  .</p>
		                </div>
				        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>
				        <p>Hierbij zijn de gebruikersnaam en het wachtwoord.</p>
				        <p>Gebruikersnaam <b>'.$student->username.'</b></p>
				        <p>Wachtwoord: <b>'.$student->postal_code.$student->postal_code.'</b></p>
				        <p>Wij Wensen u veel succes</p>
				        <p>Directie van de school .</p>
				    </body>
				</html>';
				$data['message'] = $msg;
				$this->db->insert('scheduled_emails_to_sent',$data);
				if ($this->db->affected_rows() > 0 ) {
					$emails_to_sent_count++;
				}
			}
		}
		redirect("admin/check_students_groups/$emails_to_sent_count");
	}
}

