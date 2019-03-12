<?php

class User_model extends CI_Model
{
    public function get_users()
    {

        $query = $this->db->query('SELECT * FROM users');

         $query = $this->db->get('users');

        return $query->result();

        // return $query->num_rows(); // for total row numbers
        // return $query->num_fields(); //for total columns numbers

        // $config['hostname'] = 'localhost';
        // $config['username'] = 'root';
        // $config['password'] = '';
        // $config['database'] = 'phpmvcframeworkcodeigniter';

        // $connection = $this->load->database($config);

        // $connection_2 = $this->load->database($config_2);

        // $query = $this->db->get('users');

        // return $query->result();
    }
}
