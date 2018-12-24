<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model{
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
			return formatSecondsForHours($query->row()->time_elapsed)."H(s)";
		}else{
			return 0;
		}
	}
}