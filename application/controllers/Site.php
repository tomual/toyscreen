<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function _remap($username)
	{
		echo $username;
		show_404();
	}
}
