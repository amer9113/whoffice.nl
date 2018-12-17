<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentSignup extends CI_Controller {
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
	}

	public function index()
	{
		$view = $this->load->view("student_signup",'',true);
		$this->page->fix_view_template_text($view);
	}

	public function signup()
	{
		$input = $this->input->post();
		$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[4]|max_length[75]');
		$this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[4]|max_length[75]');
		$this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[4]|max_length[75]|regex_match[/[A-Za-z]+\w/]|is_unique[students.username]',array(
			'is_unique' => 'Deze gebruikersnaam bestaat al. kies alstublieft een andere',
			'regex_match' => 'Gebruikersnaam kan alleen Latijnse tekens, cijfers of underscores bevatten. en moet beginnen met een brief. bijvoorbeeld john_10',
		));

		$this->form_validation->set_rules('postal_code', 'Postal code', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('website', 'Website', 'trim|valid_url');
		$this->form_validation->set_rules('bio', 'Bio', 'trim');

		if ($this->form_validation->run() == FALSE)
        {
			$view = $this->load->view("student_signup",'',true);
			$this->page->fix_view_template_text($view);
        }
        else
        {
        	if (isset($_FILES["profile_image"]["name"]) && !empty($_FILES["profile_image"]["name"]) )
			{
	            $config = array(
	        		'upload_path' => './ext/profiles_images/',
	        		'allowed_types' => 'gif|jpg|png|jpeg|bmp',
	        		'max_size' => 512,
					'encrypt_name' => TRUE
	        	);

	            $this->load->library('upload', $config);


	            if ($this->upload->do_upload('profile_image') )
                {
                	$input['profile_image'] = $this->upload->data('file_name');
                }
			}
        	
        	$this->db->trans_start();
        	$input['password'] = sha1($input['postal_code'].$input['postal_code']);
			$this->db->insert('students',$input);

			$acc_id = $this->db->insert_id();

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$_SESSION['acc_id'] = $acc_id;
				$_SESSION['signed_in'] = true;
				$_SESSION['acc_type'] = "student";
				header('Location: '.base_url().'student');
			}else{
				$data['message'] = 'Er is een fout opgetreden, probeer het later opnieuw';
			}
        }

	}
}