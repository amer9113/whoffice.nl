<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function update(){
		$this->db->query('ALTER TABLE `students` DROP `website`, DROP `bio`;');
	}
}
