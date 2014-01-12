<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Showcase extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('showcase');
		$this->load->view('footer');
	}
}

