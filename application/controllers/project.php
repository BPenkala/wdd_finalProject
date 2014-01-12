<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	
	public function details(){
        
		$data['rows'] = $this->project_model->get_project_details($this->uri->segment(3));
		$this->load->view('header');
		$this->load->view('project', $data);
		$this->load->view('footer');
    }
}

