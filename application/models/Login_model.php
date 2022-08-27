<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Login_model extends CI_Model {

	
	public function log_in_correctly() {  
  
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));  
        $query = $this->db->get('users');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
  
    } 
    
    function all() {
        return $master_users = $this->db->get('users')->result_array();//select from users;
    }

    function getUser($userId){
        $this->db->where('username',$userId);
        return $user = $this->db->get('users')->row_array(); //select" from users where id =?;
    }

}
