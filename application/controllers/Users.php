<?php

class Users extends CI_Controller
{

    public function show()
    {
        $this->load->model('user_model');

        $this->user_model->get_users();
    }
}
