<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    
    function loginUser($username, $password) 
    {
        $query = $this->db->get_where('user', array('username'=>$username));
        
        if($query->num_rows() > 0) 
        {
            $user = $query->row();
            $this->load->library('encrypt');        
            $decrypted_password = $this->encrypt->decode($user->password);
            if ($password == $decrypted_password)
                return true;
            else return false;            
        }
        else return false;
        
    }
    
    function getUserData($username)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        return $query->row();
    }
}