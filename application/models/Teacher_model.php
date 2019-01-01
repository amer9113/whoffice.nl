<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_model extends CI_Model{

	public function generateRandomString($length) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
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
				try {
				   set_error_handler(create_function('', "throw new Exception(); return true;")); 
				   $result = $this->email->send();
				} catch(Exception $e) { 
				   
				}


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

	public function get_pending_cards(){
		$card_1_query = $this->db->select('students.*,card_1.id as card_id, "Resultaatkaart1" as card_name, 1 as card_no')->join('students','students.id = card_1.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_1');

		$card_2_query = $this->db->select('students.*,card_2.id as card_id, "Resultaatkaart2" as card_name, 2 as card_no')->join('students','students.id = card_2.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_2');

		$card_3_query = $this->db->select('students.*,card_3.id as card_id, "Resultaatkaart3" as card_name, 3 as card_no')->join('students','students.id = card_3.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_3');

		$card_4_query = $this->db->select('students.*,card_4.id as card_id, "Resultaatkaart4" as card_name, 4 as card_no')->join('students','students.id = card_4.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_4');

		$card_5_query = $this->db->select('students.*,card_5.id as card_id, "Resultaatkaart5" as card_name, 5 as card_no')->join('students','students.id = card_5.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_5');

		$card_6_query = $this->db->select('students.*,card_6.id as card_id, "Resultaatkaart6" as card_name, 6 as card_no')->join('students','students.id = card_6.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_6');

		$card_7_query = $this->db->select('students.*,card_7.id as card_id, "Resultaatkaart7" as card_name, 7 as card_no')->join('students','students.id = card_7.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_7');

		$card_8_query = $this->db->select('students.*,card_8.id as card_id, "Resultaatkaart8" as card_name, 8 as card_no')->join('students','students.id = card_8.user_id')
		->where('checked_with_teacher',0)->where('needs_correction_by_student',0)->get('card_8');

		$data = array();


		if ($card_1_query->num_rows() > 0) {
			$data = array_merge($data,$card_1_query->result());
		}

		if ($card_2_query->num_rows() > 0) {
			$data = array_merge($data,$card_2_query->result());
		}

		if ($card_3_query->num_rows() > 0) {
			$data = array_merge($data,$card_3_query->result());
		}

		if ($card_4_query->num_rows() > 0) {
			$data = array_merge($data,$card_4_query->result());
		}

		if ($card_5_query->num_rows() > 0) {
			$data = array_merge($data,$card_5_query->result());
		}

		if ($card_6_query->num_rows() > 0) {
			$data = array_merge($data,$card_6_query->result());
		}

		if ($card_7_query->num_rows() > 0) {
			$data = array_merge($data,$card_7_query->result());
		}

		if ($card_8_query->num_rows() > 0) {
			$data = array_merge($data,$card_8_query->result());
		}

		return $data;
	}

	public function get_students_times(){

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$id = $this->input->post('id');
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$from_hours = $this->input->post('from_hours');
			$to_hours = $this->input->post('to_hours');

			if (isset($id) && !empty($id)) {
				$this->db->where('students.id',$id);
			}

			if (isset($firstname) && !empty($firstname)) {
				$this->db->where('students.firstname',$firstname);
			}

			if (isset($lastname) && !empty($lastname)) {
				$this->db->where('students.lastname',$lastname);
			}

			if (isset($email) && !empty($email)) {
				$this->db->where('students.email',$email);
			}

			if (isset($from_hours) && $from_hours != "") {
				$this->db->having('time_elapsed >=',$from_hours*60*60);
			}

			if (isset($to_hours) && $to_hours != "") {
				$this->db->having('time_elapsed <=',$to_hours*60*60);
			}

		}


		$query = $this->db->select('sum(last_action_time - login_time) as time_elapsed, students.*')
		->join('students','student_visites.student_id = students.id')
		->group_by('student_visites.student_id')
		->get('student_visites');

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $key => &$row) {
				$row->time_elapsed = formatSeconds($row->time_elapsed);
			}
		}
		
		return $query->result();
	}

	public function get_student_times_detials($student_id){
		$query = $this->db->where('student_id',$student_id)->get('student_visites');

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $key => &$row) {
				$row->from = Date('d-m-Y  h:i:sa',$row->login_time);
				$row->to = Date('d-m-Y  h:i:sa',$row->last_action_time);
				$row->time_elapsed = formatSeconds($row->last_action_time - $row->login_time);
			}
		}
		
		return $query->result();
	}

	public function get_student_last_approved_card_no($student_id){
		for ($i = 8; $i > 0 ; $i--) { 
			$query = $this->db->where('user_id',$student_id)->where('checked_with_teacher',1)->get("card_$i")->num_rows();
			if ($query != 0) {
				return $i;
			}
		}

		return 0;
	}
}