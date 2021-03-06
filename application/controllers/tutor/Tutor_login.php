<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->url = base_url().PROJECT_TUTOR_URL;
		if($this->session->has_userdata('tutor')) {
			redirect($this->url.'/dashboard');
		}
	}

	public function index()	
	{
		$post = $this->input->post();

		if(isset($post['username']) && isset($post['password'])) {

			$tutor = $this->crud->selectData('tutor', 'id, name', [
				'username'=>$post['username'],
				'password'=>md5($post['password']),
				'status'=>'Active'
			]);

			if($tutor) {

				$this->session->set_userdata('tutor', $tutor[0]);

				$this->session->set_flashdata('notification', ['type'=>'success', 'message'=>'Logged in successfully!']);

				redirect($this->url.'/dashboard');

			} else {

				$this->session->set_flashdata('notification', ['type'=>'danger', 'message'=>'Invalid username or password!']);

				redirect($this->url);

			}

		}

		$view['title'] = 'Tutor Login';

		$this->load->view('tutor/index', $view);
	}

	public function logout() 
	{
		$this->session->sess_destroy();

		redirect($this->url);
	}

}
