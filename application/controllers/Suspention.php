<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suspention extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function comming_soon()
	{
		$this->load->view("misc/comming_soon.html");
	}
}
