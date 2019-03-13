<?php

class User_model extends CI_Model
{
    public function get_users($user_id)
    {
        $this->db->where(['id' => $user_id]);

        //$this->db->where('id', $user_id);
        $query = $this->db->get('users');

        return $query->result();

        // $query = $this->db->query('SELECT * FROM users');

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

    public function create_user($data)
    {
        $this->db->insert('users', $data);
    }
}
