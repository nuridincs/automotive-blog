<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function index()
	{
		$this->load->view('main_layout');
	}
}
