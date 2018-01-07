<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		$this->settings();
	}

	public function settings()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		$site = $this->sites_model->get_by_user_id($this->session->userdata('user_id'));
		$settings = $this->sites_model->get_settings($site->site_id);

		if(!$this->ion_auth->logged_in()) {
			redirect('user/login');
		}

		if($this->input->method() == 'post') {
			// $this->form_validation->set_rules('image', 'Image URL', 'trim|required|valid_url');
			// $this->form_validation->set_rules('message', 'Message', 'trim|required');

			if($this->form_validation->run()) {
				$data = array();
				$this->sites_model->save($data);
				redirect('');
			}
		}

		$this->load->view('settings', compact('site', 'settings'));
	}
}
