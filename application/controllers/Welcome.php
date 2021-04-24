<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function vaksin(){
		$this->load->view('vaksin-page');
	}

	public function test(){
		$this->load->view('test_covid');
	}

	public function faq(){
		$this->load->view('faq');
	}

	public function faq_1() {
		$this->load->view('pages/faq_1');
	}

	public function faq_2() {
		$this->load->view('pages/faq_2');
	}
	
	public function faq_3() {
		$this->load->view('pages/faq_3');
	}
	
	public function faq_4() {
		$this->load->view('pages/faq_4');
	}
	
	public function faq_5() {
		$this->load->view('pages/faq_5');
	}
	
	public function faq_6() {
		$this->load->view('pages/faq_6');
	}
	
	public function faq_7() {
		$this->load->view('pages/faq_7');
	}
	
	public function faq_8() {
		$this->load->view('pages/faq_8');
	}
		
	public function faq_9() {
		$this->load->view('pages/faq_9');
	}
		
	public function faq_10() {
		$this->load->view('pages/faq_10');
	}
}
