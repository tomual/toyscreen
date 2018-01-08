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
		$site = $this->sites_model->get_by_user_id($user->user_id);

		$page = $this->uri->segment(2);

		switch ($page) {
			case 'archive':
				$this->archive($site);
				break;

			case 'board':
				$this->board($site);
				break;

			case 'info':
				$this->info($site);
				break;
			
			default:
				$this->home($site);
				break;
		}
	}

	public function home($site)
	{
		$post_id = $this->uri->segment(2);
		$post = $this->posts_model->get_post($site->site_id, $post_id);
		$next = $this->posts_model->get_next($post);
		$prev = $this->posts_model->get_prev($post);
		$this->load->view('site', compact('post', 'site', 'next', 'prev'));
	}

	public function archive($site)
	{
		$this->load->view('archive', compact('site'));
	}

	public function board($site)
	{
		$this->load->view('board', compact('site'));
	}

	public function info($site)
	{
		$this->load->view('info', compact('site'));
	}
}
