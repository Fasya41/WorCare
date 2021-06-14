<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faz extends MY_Controller {
	
	public function index(){
		$this->load->view('Header');
        $this->load->view('Body');
        $this->load->view('Footer');
	}
}