<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->url = base_url().PROJECT_TUTOR_URL;
		if(!$this->session->has_userdata('tutor')) {
			redirect($this->url);
		}
	}

	public function index()
	{
		$view['title'] = 'Tutor Dashboard';

		$this->load->view('tutor/dashboard', $view);
	}

	public function logout()
	{
		$this->session->sess_destroy('tutor');
		
		redirect($this->url);
	}

}
