<?php

class Users extends CI_Controller
{

    public function show($user_id)
    {
        // $this->load->model('user_model');

        $results['results'] = $this->user_model->get_users($user_id);

        $this->load->view('user_view', $results);

        // print_r($result);
        // exit;

        // foreach ($result as $item) { 
        //     echo $item->id.' - ';
        //     echo $item->user.' - ';
        //     echo $item->pass.'<br>';
        // }
    }

    public function insert_user()
    {
        $username = 'haroon';
        $password = 'secret';

        $this->user_model->create_user(['user' => $username, 'pass' => $password]);
    }
}
