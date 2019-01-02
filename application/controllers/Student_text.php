<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_text extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function learn_ar()
	{
		$this->load->view("student_text/learn_ar.php");
	}

	public function learn_hol()
	{
		$this->load->view("student_text/learn_hol.php");
	}

	public function work_ar()
	{
		$this->load->view("student_text/work_ar.php");
	}

	public function work_hol()
	{
		$this->load->view("student_text/work_hol.php");
	}

}