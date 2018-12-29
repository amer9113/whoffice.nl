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
		echo "Updating DB....<br>";
		ob_end_flush();
		flush();
		$this->db->query("ALTER TABLE `students` ADD `sent_completion_time_email` INT NOT NULL DEFAULT '0' AFTER `student_group`");
		$this->db->query("ALTER TABLE `students` CHANGE `username` `username` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
		$this->db->query("ALTER TABLE `students` CHANGE `firstname` `firstname` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
		$this->db->query("ALTER TABLE `students` CHANGE `lastname` `lastname` VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
		$this->db->query("ALTER TABLE `students` DROP `profile_image`");
		$this->db->query('ALTER TABLE `students` DROP `website`, DROP `bio`');
		$this->db->query("ALTER TABLE `card_1` ADD `which_work_is_selected` INT NOT NULL AFTER `work_3`");
		$this->db->query("ALTER TABLE `card_3` ADD `properties_7` VARCHAR(255) NOT NULL AFTER `have_properties_2`, ADD `have_properties_7` TINYINT NOT NULL AFTER `properties_7`");
		$this->db->query("ALTER TABLE `card_5` ADD `days_work` TINYINT NOT NULL AFTER `training_multi_year`, ADD `days_school` TINYINT NOT NULL AFTER `days_work`");
		$this->db->query("ALTER TABLE `card_6` ADD `parents` TINYINT NOT NULL AFTER `sports_club_friend`, ADD `another_parents` TINYINT NOT NULL AFTER `parents`");
		echo "Done.";
	}
}
