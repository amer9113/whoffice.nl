<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Model{
	public function fix_view_template_text($view,$page_no=-1){
		preg_match_all("/\[\[\w*:\w*\]\]/", $view,$matches);
		
		foreach ($matches[0] as $key => $row) {
			$str = str_replace('[[', '', $row);
			$str = str_replace(']]', '', $str);
			list($name, $prpoerty) = explode(':', $str);

			if ($page_no > -1) {
				$this->db->where('page_nr',$page_no);
			}
			$text_requested = $this->db->where('name',$name)->get('page_text')->row();
			if (isset($text_requested->$prpoerty)) {
				$view = str_replace("[[$name:$prpoerty]]", $text_requested->$prpoerty, $view);
			}
		}

		echo $view;
	}

	public function view_raw_card($view,$page_no=-1){
		preg_match_all("/\[\[\w*:\w*\]\]/", $view,$matches);
		
		foreach ($matches[0] as $key => $row) {
			$str = str_replace('[[', '', $row);
			$str = str_replace(']]', '', $str);
			list($name, $prpoerty) = explode(':', $str);

			if ($prpoerty == "text_ar") {
				$text_to_view = $name." (arabic)";
			}else{
				$text_to_view = "$name";
			}

			$view = str_replace("[[$name:$prpoerty]]", $text_to_view, $view);
		}

		echo $view;
	}
}