<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model{

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

	public function get_last_approved_card_no(){
		for ($i = 8; $i > 0 ; $i--) { 
			$query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get("card_$i")->num_rows();
			if ($query != 0) {
				return $i;
			}
		}

		return 0;
	}

	public function get_cards_status(){
		$card_8_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_8')->num_rows();

		$card_7_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_7')->num_rows();

		$card_6_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_6')->num_rows();

		$card_5_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_5')->num_rows();

		$card_4_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_4')->num_rows();

		$card_3_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_3')->num_rows();

		$card_2_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_2')->num_rows();

		$card_1_query = $this->db->where('user_id',$this->acc_id)->where('checked_with_teacher',1)->get('card_1')->num_rows();


		$data = [
			(object)array('card_no' => 1 , 'approved' => $card_1_query, 'accessable' => 1),
			(object)array('card_no' => 2 , 'approved' => $card_2_query, 'accessable' => $card_1_query),
			(object)array('card_no' => 3 , 'approved' => $card_3_query, 'accessable' => $card_2_query),
			(object)array('card_no' => 4 , 'approved' => $card_4_query, 'accessable' => $card_3_query),
			(object)array('card_no' => 5 , 'approved' => $card_5_query, 'accessable' => $card_4_query),
			(object)array('card_no' => 6 , 'approved' => $card_6_query, 'accessable' => $card_5_query),
			(object)array('card_no' => 7 , 'approved' => $card_7_query, 'accessable' => $card_6_query),
			(object)array('card_no' => 8 , 'approved' => $card_8_query, 'accessable' => $card_7_query),
		];

		return $data;
	}

	public function get_student_elapsed_time(){
		$query = $this->db->select('sum(last_action_time - login_time) as time_elapsed')
		->where('student_id',$this->acc_id)
		->get('student_visites');

		if ($query->num_rows() > 0) {

			if ($query->row()->time_elapsed >= 64*60*60) {
				
				$student = $this->db->where('id',$this->acc_id)->get('students')->row();

				if ($student->sent_completion_time_email == 0) {
					$msg = '<html lang="NL">
					    <head>
					    <title></title>
					    </head>
					    <body>
					        <p>Hello <b>'.$student->firstname.' '.$student->lastname.'</b></p>
					        <p>You have completed your 64 hours on whoffic.</p>
					        <p>Thank you.</p>
					        <p>Support Team.</p>
					    </body>
					</html>';

					$subject = "Whoffice completion time.";

					$response = $this->send_email($student->email,$msg,$subject);

					if ($response == "sent") {
						$this->db->where('id',$this->acc_id)->set('sent_completion_time_email',1)->update('students');
					}

				}
			}
			return formatSecondsForHours($query->row()->time_elapsed)."H(s)";
		}else{
			return 0;
		}
	}
}