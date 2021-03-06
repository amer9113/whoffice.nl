<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Europe/Amsterdam");
		$this->load->dbutil();
	}

	public function index(){
	}

	public function backup(){
		set_time_limit(5*60);
		$backup = $this->dbutil->backup();
		$this->load->helper('file');
		$backup_file_name = 'backup_'.Date('Y-m-d_h-i-s').'.gz';
		/*SET FOREIGN_KEY_CHECKS = 0;
		SET FOREIGN_KEY_CHECKS = 1;*/
		if (!file_exists('db_backups')) {
		    mkdir('db_backups', 0777, true);
		}
		write_file('db_backups/'.$backup_file_name, $backup);

		/*Delete backups older than 2 months*/
		$files = glob("db_backups/*.gz");
		$now = time();

		foreach ($files as $file) {
		    if (is_file($file)) {
		     	if ($now - filemtime($file) >= 60 * 60 * 24 * 60) { // 60 days
		        	unlink($file);
		      	}
		    }
		}
		/*Delete backups older than 2 months*/
		set_time_limit(30);
	}

	public function check_email_host($email) {
		return true;
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
					return "not sent";
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

	public function send_scheduled_emails(){
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
		$this->db->query("ALTER TABLE `employment_letter2_template`  ADD `education_course` VARCHAR(500) NOT NULL  AFTER `job2_houres`,  ADD `education_institution` VARCHAR(500) NOT NULL  AFTER `education_course`,  ADD `education_from` DATE NOT NULL  AFTER `education_institution`,  ADD `education_to` DATE NOT NULL  AFTER `education_from`,  ADD `education_diploma` VARCHAR(25) NOT NULL  AFTER `education_to`,  ADD `work_experience_position` VARCHAR(500) NOT NULL  AFTER `education_diploma`,  ADD `work_experience_activities` TEXT NOT NULL  AFTER `work_experience_position`,  ADD `work_experience_company` VARCHAR(500) NOT NULL  AFTER `work_experience_activities`,  ADD `work_experience_from` DATE NOT NULL  AFTER `work_experience_company`,  ADD `work_experience_to` DATE NOT NULL  AFTER `work_experience_from`,  ADD `references_name` VARCHAR(500) NOT NULL  AFTER `work_experience_to`,  ADD `references_position` VARCHAR(500) NOT NULL  AFTER `references_name`,  ADD `references_company` VARCHAR(500) NOT NULL  AFTER `references_position`,  ADD `references_tel_no` VARCHAR(50) NOT NULL  AFTER `references_company`;");
		echo "Done.";
	}
}
