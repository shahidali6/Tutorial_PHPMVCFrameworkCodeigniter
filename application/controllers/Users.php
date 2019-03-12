<?php

class Users extends CI_Controller
{

    public function show()
    {
        // $this->load->model('user_model');

        $results['results'] = $this->user_model->get_users();

        $this->load->view('user_view', $results);

        // print_r($result);
        // exit;

        // foreach ($result as $item) { 
        //     echo $item->id.' - ';
        //     echo $item->user.' - ';
        //     echo $item->pass.'<br>';
        // }
    }
}
