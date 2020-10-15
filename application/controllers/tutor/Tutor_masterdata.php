<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_masterdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->url = base_url().PROJECT_TUTOR_URL;
		if(!$this->session->has_userdata('tutor')) {
			redirect($this->url);
		}
		$this->tutor = $this->session->userdata('tutor');
	}

	public function academics()
	{
		$view['title'] = 'Academics';

		$view['academics'] = $this->crud->selectData('academics', '*', ['tutor_id'=>$this->tutor->id]);
 
		$this->load->view('tutor/master-data/academics', $view);
	}

	public function academics_create()
	{
		$post = $this->input->post();

		if(isset($post['academic'])) {

			$this->crud->insertData('academics', [
				'name' => $post['academic'],
				'tutor_id' => $this->tutor->id,
				'created' => date('Y-m-d H:i:s'),
			]);

			$this->session->set_flashdata('notification', ['type'=>'success', 'message'=>'Academic added successfully!']);

			redirect($this->url.'/master-data/academics');

		} else {

			$this->session->set_flashdata('notification', ['type'=>'danger', 'message'=>'Invalid access!']);

			redirect($this->url.'/master-data/academics');

		}
	}

	public function academics_edit($id)
	{
		if($id) {

			$post = $this->input->post();

			if(isset($post['academic'])) {

				$update = $this->crud->updateData('academics', ['name'=>$post['academic']], ['id'=>$id, 'tutor_id'=>$this->tutor->id]);

				if($update) {

					$this->session->set_flashdata('notification', ['type'=>'info', 'message'=>'Academic udpated successfully!']);

					redirect($this->url.'/master-data/academics/edit/'.$id);

				} else {

					$this->session->set_flashdata('notification', ['type'=>'info', 'message'=>'Academic already up to date!']);

					redirect($this->url.'/master-data/academics/edit/'.$id);

				}

			}

			$view['title'] = 'Edit Academics';

			$academic = $this->crud->selectData('academics', '*', [
				'id' => $id,
				'tutor_id' => $this->tutor->id,
			]);

			if($academic) {

				$view['academic'] = $academic[0];

				$this->load->view('tutor/master-data/edit-academics', $view);

			} else {

				$this->session->set_flashdata('notification', ['type'=>'danger', 'message'=>'Invalid access!']);

				redirect($this->url.'/master-data/academics');

			}

		} else {

			$this->session->set_flashdata('notification', ['type'=>'danger', 'message'=>'Invalid access!']);

			redirect($this->url.'/master-data/academics');

		}
	}

}
