<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$view['title'] = 'Welcome';
		$this->load->view('home', $view);
	}

}
