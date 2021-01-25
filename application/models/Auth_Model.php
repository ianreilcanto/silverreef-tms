<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
{

   

    public function authenticate($username){

        $this->db->select('*');
        $this->db->from('credentials');
        $this->db->where('username', $username);

        return $query = $this->db->get()->result_array(); 

    }

    

}
