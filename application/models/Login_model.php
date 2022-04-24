<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function validate_user()
    {
        $auth = array(
            'phone' => $this->input->post('phone'),
            'password' => $this->input->post('password')
        );
        $user = $this->db->get_where('users', $auth);
        if($user->num_rows() > 0) {
            return $user;
        }else{
            return false;
        }
    }
}