<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employment_letter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Europe/Amsterdam");
	}

	public function index()
	{
		$this->load->view("emplyment_letters/home");
    }

	public function employment_letter_form(){
        $data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pdf_file = $this->create_pdf_employment_letter();
            $data = $this->input->post();
            //load library
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            /*Arabic support*/
            $pdf->allow_charset_conversion = false;  // Set by default to TRUE
            $pdf->charset_in = 'UTF-8';
            $pdf->SetDirectionality('ltr');
            $pdf->autoLangToFont = true;
            $pdf->autoScriptToLang = true;
            /*Arabic support*/
            /*ini_set('memory_limit', '256M');*/
            // boost the memory limit if it's low
            $html = $this->load->view('emplyment_letters/student_employment_letter_template',$data,true);
            // render the view into HTML
            $pdf->WriteHTML($html); // write the HTML into the PDF
            $file_name = $data['username'].'_employment_letter.pdf';
            $pdf->Output($file_name,'D');
        }

        $view = $this->load->view("emplyment_letters/student_employment_letter_form",$data,true);
        $this->page->fix_view_template_text($view);
	}

	public function employment_letter_form_2(){
        $data = array();
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->input->post();
            //load library
            $this->load->library('pdf');
            $pdf = $this->pdf->load();
            /*Arabic support*/
            $pdf->allow_charset_conversion = false;  // Set by default to TRUE
            $pdf->charset_in = 'UTF-8';
            $pdf->SetDirectionality('ltr');
            $pdf->autoLangToFont = true;
            $pdf->autoScriptToLang = true;
            /*Arabic support*/
            /*ini_set('memory_limit', '256M');*/
            // boost the memory limit if it's low
            $data['type'] = $data['voor_type'];
            $html = $this->load->view('emplyment_letters/student_employment_letter2_template',$data,true);
            // render the view into HTML
            $pdf->WriteHTML($html); // write the HTML into the PDF
            $file_name = $data['username'].'_employment_letter2.pdf';
            $pdf->Output($file_name,'D');
        }
        $view = $this->load->view("emplyment_letters/student_employment_letter2_form",$data,true);
		$this->page->fix_view_template_text($view);
	}
}
