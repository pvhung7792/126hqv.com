<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->library('session');
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
		if($this->session->userdata('is_login') != 1  || $this->session->userdata('user_role') != 1){
			redirect('login');
		}
    }

	public function index()
	{
		$this->dashboard();
	}

    public function dashboard()
    {
        $page_data['page_title'] = 'dashboard';
        $page_data['page_name'] = 'dashboard';
        $this->load->view('index', $page_data);
    }

    public function user()
    {
        $this->admin_model->get_all_user();
    }
}
