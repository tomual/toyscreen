<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		if ($this->ion_auth->logged_in())
		{
			redirect('/', 'refresh');
		}
		if($this->input->method() == 'post')
		{
		    $this->form_validation->set_rules('identity', 'Username', 'required');
		    $this->form_validation->set_rules('password', 'Password', 'required');
		    if($this->form_validation->run() !== FALSE)
		    {
		    	$remember = (bool)$this->input->post('remember');
		        if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
    			{
    				$this->session->set_flashdata('message', $this->ion_auth->messages());
    				redirect('/', 'refresh');
    			}
    			else
    			{
    				$this->session->set_flashdata('message', $this->ion_auth->errors());
    				redirect('user/login', 'refresh');
    			}
		        redirect('/');
		    }
		    else
		    {
		        $this->session->set_flashdata('error', 'There are errors in the form.');
		    }
		}
		$this->load->view('user/login');
	}

	public function register()
	{
		if ($this->ion_auth->logged_in())
		{
			redirect('/', 'refresh');
		}
		if($this->input->method() == 'post')
		{
		    $this->form_validation->set_rules('identity', 'Username', 'required');
		    $this->form_validation->set_rules('first_name', 'First name', 'required');
		    $this->form_validation->set_rules('email', 'Email address', 'required|valid_email');
		    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		    $this->form_validation->set_rules('password2', 'Password confirmation', 'required|matches[password]');
		    if($this->form_validation->run() !== FALSE)
		    {
		        $username = $this->input->post('identity');
		        $password = $this->input->post('password');
		        $email = $this->input->post('email');
		        $additional_data = array(
		            'first_name' => $this->input->post('first_name')
		        );
		        $group = array('1');
		        if($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
		        	$this->ion_auth->login($username, $password, TRUE);
		        	$this->session->set_flashdata('success', 'Successfully signed up');
		        	redirect('/');
		        } else {
					$message = $this->ion_auth->errors();
		        }
		    }
		    else
		    {
		        $message = 'There are errors in the form.';
		    }
		}
		$this->load->view('user/register', compact('message'));
	}

	public function logout()
	{
		$logout = $this->ion_auth->logout();
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('user/login', 'refresh');
	}
}
