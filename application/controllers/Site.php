<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function _remap($username)
	{
		$user = $this->users_model->get_by_username($username);
		if (!$user) {
			show_404();
			return;
		}
		$post = $this->posts_model->get_post();
		$site = $this->sites_model->get_by_username($user->username);
		$this->load->view('site', compact('post', 'site'));
	}
}
