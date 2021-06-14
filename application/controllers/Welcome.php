<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	public function index(){
		$this->load->view('Header');
		$this->load->view('Konten');
		$this->load->view('Footer');
	}
}
