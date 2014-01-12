<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['rows'] = $this->project_model->get_projects();
		$this->load->view('header');
		$this->load->view('home', $data); //pass $data
		$this->load->view('footer');
	}
}

