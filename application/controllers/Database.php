<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function check_email_host($email) {
		if (trim($email) == "") {
			return false;
		}
	    $domain_name = substr($email,(strpos($email, '@'))+1);
	    if ( checkdnsrr($domain_name, 'ANY') ) {
		  	return true;
		}
		else {
		  	return false;
		}
	}

	public function send_email($email,$msg,$subject) {
		$this->config->load('email');
		$smtp_host = $this->config->item('smtp_host');
		$smtp_user = $this->config->item('smtp_user');
		$smtp_pass = $this->config->item('smtp_pass');

		if (!empty($smtp_host) && !empty($smtp_user) && !empty($smtp_pass)) {
			if ($this->check_email_host($email)) {
				$this->email->from($smtp_user);
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($msg);
				$result = false;
				set_error_handler(function() { $result = false; });
				$result = $this->email->send();
				restore_error_handler();
				
				if (!$result){
					return "not_sent";
				}else{
					return "sent";
				}
			}else{
				return "student email isn't valid.";
			}
		}else{
			return "missing email configs.";
		}
	}

	public function send_scheduled_emails()
	{
		$list = $this->db->order_by('RAND()')->limit(10)->get('scheduled_emails_to_sent');
		if ($list->num_rows() > 0) {
			foreach ($list->result() as $key => $row) {
				$result = $this->send_email($row->email,$row->message,$row->subject);
				if ($result == "sent") {
					$this->db->where('id',$row->id)->delete('scheduled_emails_to_sent');
				}else{
					$this->db->set('status',$result)->where('id',$row->id)->update('scheduled_emails_to_sent');
				}
			}
		}

	}

	public function update(){
		echo "Updating DB....<br>";
		ob_end_flush();
		flush();
		try {
			set_error_handler(create_function('', "throw new Exception(); return true;")); 
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
		} catch (Exception $e) {
			
		}
		echo "Done.";
	}
}
