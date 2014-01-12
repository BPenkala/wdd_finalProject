<?php

    class User_model extends CI_Model{
    
    
        function __construct() {
            
        }
    
    
        public function verify_user($email, $password){
            
            $q = $this->db->where('email_address', '$email')->where('password', sha1($password))->limit(1)->get('hoatzin_users');
            
            
            if ($q->num_rows >0){
                
                return $q->row();
                
            }
            
            return false;
        }
    
    }        

