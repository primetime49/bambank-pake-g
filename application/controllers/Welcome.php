<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function vaksin(){
		$this->load->view('vaksin');
		$this->load->library('table');

		$data = array(
				array('Nama Fasilitas Kesehatan', 'Tipe', 'Alamat', 'Lokasi'),
				array('Rumah Sakit Melati', 'Tingkat Kedua', 'Jalan Merdeka Barat', ),
				array('Puskesmas Melati', 'Tingkat Pertama', 'Jalan Mardika Baru'),
				array('Klinik Melati', 'Tingkat Pertama', 'Jalan Mardaka Biru'),
		);
		$template = array(
			'table_open' => '<table border="1" class="mytable">'
	);
		$this->table->set_template($template);
		echo $this->table->generate($data);
	}
	
}
