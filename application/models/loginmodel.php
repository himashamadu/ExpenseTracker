<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginmodel extends CI_Model
{
    public function fetch_data($user, $pass)
    {
        $this->db->select('name,password');
        $this->db->from('user');
        $this->db->where('name', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert()
    {
        $data=array(
            'name'=>'user',
            'password'=>'pass',
            'email'=>'email'
        );
        $this->db->insert('user', $data);
    }
}