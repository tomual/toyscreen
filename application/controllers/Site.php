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
		$posts = $this->posts_model->get_archive($site->site_id);
		$this->load->view('archive', compact('site', 'posts'));
	}

	public function board($site)
	{
		$this->load->helper('captcha');
		$this->load->library('form_validation');
		$vals = array(
	        'img_path'      => './img/captcha/',
	        'img_url'       =>  base_url('img/captcha'),
	        'word_length'   => 5,
	        'font_size'     => 50
		);

		$captcha = create_captcha($vals);

		$data = array(
	        'captcha_time'  => $captcha['time'],
	        'ip_address'    => $this->input->ip_address(),
	        'word'          => $captcha['word']
		);

		$query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);

		if($this->input->method() == 'post') {
			$this->form_validation->set_rules('name', 'Name', 'trim|required|valid_url');
			$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[10]');
			$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_check');			

			if($this->form_validation->run()) {
				$data = array(
					'site_id' => $site->site_id,
					'ip' => $this->input->ip_address(),
					'name'	=> $this->input->post('name'),
					'message' => nl2br($this->input->post('message'))
				);
				$this->sites_model->create_message($data);
				redirect('~' . $site->user->username . '/board');
			}
		}

		$delete = $this->uri->segment(3) == 'delete';
		if($delete) {
			$message_id = $this->uri->segment(4);
			if(!empty($message_id)) {
				$this->sites_model->delete_message($site, $message_id);
			}
		}

		$messages = $this->sites_model->get_board($site->site_id);
		$this->load->view('board', compact('site', 'captcha', 'messages'));
	}

	public function captcha_check($string)
	{
		// First, delete old captchas
		$expiration = time() - 7200; // Two hour limit
		$this->db->where('captcha_time < ', $expiration)->delete('captcha');

		// Then see if a captcha exists:
		$sql = 'SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?';
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();

		if ($row->count == 0)
		{
			$this->form_validation->set_message('captcha_check', 'You must submit the word that appears in the image');
			return FALSE;
		}
		return TRUE;
	}

	public function info($site)
	{
		$this->load->view('info', compact('site'));
	}
}
