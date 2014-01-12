<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Build extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('build');
		$this->load->view('footer');
	}
        
        public function create(){
            
            // Save Project
            $data = array(
                'project_title' => $this->input->post('project_title'),
                'project_what' => $this->input->post('project_what'),
                'project_why' => $this->input->post('project_why'),
                'project_how' => $this->input->post('project_how'),
                'project_goals' => $this->input->post('project_goals'),
                'project_repo' => $this->input->post('project_repo')
                
            );
            $this->project_model->make_project($data);
               
            // Return User to ...
            
            redirect('index.php/success');
            
        }
        
        public function upload(){
            
            $config['upload_path'] = "/uploads";
            $config['allowed_types'] = "jpg|jpeg|gif|png|bmp";
            $this->load->library('upload', $config);
            
            if($this->upload->do_upload()){
                
               echo "it worked"; 
                
               $finfo=$this->upload->data();
               $this->_createThumbnail($finfo['file_name']);
               $data['uploadInfo'] = $finfo;
               $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext'];
               $this->load->view('project_success');
 
            } else {echo "it didn't work";}
            
        }
        
        public function _createThumbnail($filename){
 
            $config['image_library']    = "gd2";      
            $config['source_image']     = "/uploads" .$filename;      
            $config['create_thumb']     = TRUE;      
            $config['maintain_ratio']   = TRUE;      
            $config['width'] = "120";      
            $config['height'] = "80";
            $this->load->library('image_lib',$config);
        }
}