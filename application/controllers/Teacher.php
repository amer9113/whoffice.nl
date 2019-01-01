<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teacher extends CI_Controller {
	var $acc_id;
	var $acc_name;
	public function __construct(){
		parent::__construct();
		$teacher_signed_in = $this->session->userdata('teacher_signed_in');
		if ($teacher_signed_in != 'true') {
			redirect('teacher_login');
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
					redirect('teacher_login');
				}
			}else{
				$this->session->sess_destroy();
				redirect('teacher_login');
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
		redirect('teacher_login');
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


	public function check_card($student_id,$card_no,$mode=0/*0 for view and 1 for approving*/){
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && $mode == 1) {

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
				        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>
				        <p>Yor cards is updated by teacher. Please check it out.</p>
				        <p>Thank you.</p>
				        <p>Support Team.</p>
				    </body>
				</html>';

				$subject = "Whoffice Card Informaion.";

				$this->Teacher_model->send_email($student->email,$msg,$subject);

				redirect('teacher/check_students_pending_cards');

			}else{
				echo "Sorry, error.";
			}
		}

		$card_details_query = $this->db->where('user_id',$student_id)->get("card_$card_no");

		if ($card_details_query->num_rows() == 1) {

			$data['data'] = $card_details_query->row();

			$data['opened_for_teacher_checking'] = true;
			$data['opened_for_teacher_checking_mode'] = $mode;

			$view = $this->load->view("student/student_card_$card_no",$data,true);

			$this->page->fix_view_template_text($view,$page_no=$card_no);

		} else {

			echo "Sorry, card isn't found.";

		}

	}



	public function check_students_times(){
		$data['students_times'] = $this->Teacher_model->get_students_times();
		$view = $this->load->view("teacher/student_times",$data,true);
		$this->page->fix_view_template_text($view);
	}

	public function check_students_informations(){

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

		$data['students'] = $this->db->get('students')->result();
		$view = $this->load->view("teacher/students_informations",$data,true);
		$this->page->fix_view_template_text($view);
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

		        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>

		        <p>This is information mail sent to you from administration.</p>

		        <p>Your account username is <b>'.$student->username.'</b></p>

		        <p>Your password is <b>'.$student->postal_code.$student->postal_code.'</b></p>

		        <p>Your Group is <b>'.$student->student_group.'</b></p>

		        <p>Thank you.</p>

		        <p>Support Team.</p>

		    </body>

		</html>';



		$subject = "Whoffice Account Informaion.";



		$result = $this->Teacher_model->send_email($student->email,$msg,$subject);



		if ($result == "sent") {

			$data['message'] = "Email is sent successfully.";

		}else{

			$data['message'] = "Sorry, something went wrong.<br>$result";

		}



		$data['students'] = $this->db->get('students')->result();

		$view = $this->load->view("teacher/students_informations",$data,true);

		$this->page->fix_view_template_text($view);
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

			        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>

			        <p>This is information mail sent to you from administration.</p>

			        <p>Your account username is <b>'.$student->username.'</b></p>

			        <p>Your password is <b>'.$new_passwrod.'</b></p>

			        <p>Your Group is <b>'.$student->student_group.'</b></p>

			        <p>Thank you.</p>

			        <p>Support Team.</p>

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

				$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[4]|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

					'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Brouse_10'

				));

				$this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[4]|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

					'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Wayne_10'

				));

				$this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[8]|max_length[100]|regex_match[/[A-Za-z]+\w/]',array(

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

								        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>

								        <p>This is information mail sent to you from administration.</p>

								        <p>Your account username is <b>'.$student->username.'</b></p>

								        <p>Your password is <b>'.$password.'</b></p>

								        <p>Your Group is <b>'.$student->student_group.'</b></p>

								        <p>Thank you.</p>

								        <p>Support Team.</p>

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

				redirect('teacher/check_students_informations');

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

			$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[4]|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

				'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Brouse_10'

			));

			$this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[4]|max_length[45]|regex_match[/[A-Za-z]+\w/]',array(

				'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld Wayne_10'

			));

			$this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[8]|max_length[100]|regex_match[/[A-Za-z]+\w/]|is_unique[students.username]',array(

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

					        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>

					        <p>This is information mail sent to you from administration.</p>

					        <p>Your account username is <b>'.$student->username.'</b></p>

					        <p>Your password is <b>'.$input['postal_code'].$input['postal_code'].'</b></p>

					        <p>Your Group is <b>'.$student->student_group.'</b></p>

					        <p>Thank you.</p>

					        <p>Support Team.</p>

					    </body>

					</html>';



					$subject = "Whoffice New Account Informaion.";

					$this->Teacher_model->send_email($student->email,$msg,$subject);

					header('Location: '.base_url().'teacher/check_students_informations');

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

}

