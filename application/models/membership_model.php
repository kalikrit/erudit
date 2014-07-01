<?php

class Membership_model extends CI_Model {
    
    function validate()
    {
        $this->db->where('user_name', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('membership');
        
        if($query->num_rows() == 1) 
        {
            return true;
        }
    }
}
