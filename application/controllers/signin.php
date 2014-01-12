<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin extends CI_Controller {
    
    public function __construct(){
        
        parent::__construct();
        session_start();
        
    }

    public function index(){
            
        $this->load->view('header');
    	$this->load->view('signin');
        $this->load->view('footer');
                
                
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email_address', 'Email Address','required|valid_email');
        $this->form_validation->set_rules('password', 'Password','required|min_length[4]');
                
        if($this->form_validation->run()!==false){
                    
            $r = $this->user_model->verify_user($this->input->post('email_address'), $this->input->post('password'));
                    
            if($r !==false){
                        
                $_SESSION['username'] = $this->input->post('email_address');
                redirect('home');        
            }
            
            $this->load->view('signin');
        }
                
    }
}