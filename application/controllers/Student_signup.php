<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_signup extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$view = $this->load->view("student/student_signup",'',true);
		$this->page->fix_view_template_text($view);
	}

	public function signup()
	{
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
			$view = $this->load->view("student/student_signup",'',true);
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
				$this->session->set_userdata('student_acc_id',$acc_id);
				$this->session->set_userdata('student_signed_in','true');
\
				$this->db->set('student_id',$acc_id)->set('login_time',time())->set('last_action_time',time())->insert('student_visites');

				header('Location: '.base_url().'student');
			}else{
				$data = array();
				$data['message'] = 'Er is een fout opgetreden, probeer het later opnieuw';
				$view = $this->load->view("student/student_signup",$data,true);
				$this->page->fix_view_template_text($view);
			}
        }

	}
}