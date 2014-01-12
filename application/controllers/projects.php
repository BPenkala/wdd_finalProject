<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
                
                $data['rows'] = $this->project_model->get_all_projects();
		$this->load->view('header');
		$this->load->view('projects', $data);
		$this->load->view('footer');
	}
}