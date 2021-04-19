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
}
