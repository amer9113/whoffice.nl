<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentSignup extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('student_signup');
	}

	public function signup()
	{
		$input = $this->input->post();
		$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required|min_length[4]|max_length[75]');
		$this->form_validation->set_rules('lastname', 'LastName', 'trim|required|min_length[4]|max_length[75]');
		$this->form_validation->set_rules('username', 'UserName', 'trim|required|min_length[4]|max_length[75]|regex_match[/[A-Za-z]+\w/]|is_unique[students.username]',array(
			'is_unique' => 'This username is already exist. please choose another one',
			'regex_match' => 'Username can have only latin characters, numbers or underscores. and must start with a letter. for example john_10',
		));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('postal_code', 'Postal code', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('website', 'Website', 'trim|valid_url');
		$this->form_validation->set_rules('bio', 'Bio', 'trim');

		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('student_signup');
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
        	$input['password'] = sha1($input['password']);
			$this->db->insert('students',$input);

			$acc_id = $this->db->insert_id();

			$this->db->trans_complete();

			if ($this->db->trans_status() === true) {
				$this->session->set_userdata('acc_id',$acc_id);
				$this->session->set_userdata('signed_in',true);
				$this->session->set_userdata('acc_type',"student");
				redirect('student');
			}else{
				$data['message'] = 'Error happened, try again later';
			}
        }

	}
}