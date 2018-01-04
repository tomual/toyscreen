<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$this->create();
	}

	public function create()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$site = $this->sites_model->get_by_user_id($this->session->userdata('user_id'));

		if(!$this->ion_auth->logged_in()) {
			redirect('user/login');
		}

		if($this->input->method() == 'post') {
			$this->form_validation->set_rules('image', 'Image URL', 'trim|required|valid_url');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');

			if($this->form_validation->run()) {
				$data = array(
					'site_id' => $site->site_id,
					'image'	=> $this->input->post('image'),
					'message' => nl2br($this->input->post('message'))
				);
				$this->posts_model->create($data);
				redirect('~' . $site->user->username);
			}
		}

		$this->load->view('post', compact('site'));
	}
}
