<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		$this->edit();
	}

	public function edit()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$site = $this->sites_model->get_by_user_id($this->session->userdata('user_id'));

		if(!$this->ion_auth->logged_in()) {
			redirect('user/login');
		}

		if($this->input->method() == 'post') {
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('background', 'Background Image URL', 'trim|required|valid_url');
			$this->form_validation->set_rules('info', 'Info Text', 'trim');

			if($this->form_validation->run()) {
				$data = array(
					'title'	=> $this->input->post('title'),
					'background' => $this->input->post('background'),
					'info'	=> $this->input->post('info'),
					'avatar' => $this->input->post('avatar')
				);
				$this->sites_model->save($site->site_id, $data);
				redirect('settings');
			}
		}

		$this->load->view('settings', compact('site'));
	}
}
