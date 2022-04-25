<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->library('session');
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
		if($this->session->userdata('is_login') == 1){
			redirect('admin', 'refresh');

			if($this->session->userdata('user_role') == 1){
				redirect('admin', 'refresh');
			}
			if($this->session->userdata('user_role') == 2){
				redirect('user', 'refresh');
			}
		}
		$this->login();
	}

	public function not_found()
	{
		$this->load->view('errors/cli/error_404');
	}

	public function login()
	{
		$page_data['page_title'] = 'login';
		$this->load->view('login/login_page', $page_data);
	}

	public function logout()
	{
		$this->session->unset_userdata('user_role');
		$this->session->unset_userdata('is_login');
		$this->login();
	}

	public function validate()
	{
		$user = $this->login_model->validate_user();
		if(!$user){
			$this->session->set_flashdata('error_message', 'tài khoản hoặc mật khẩu sai');
			redirect('home/login', 'refresh');
		}
		$this->session->set_flashdata('flash_message', 'đăng nhập thành công');
		$this->session->set_userdata('is_login', 1);
		$this->session->set_userdata('user_role', $user['role_id']);
		if($user['role_id'] == 1){
			redirect('admin', 'refresh');
		}elseif($user['role_id'] == 2){
			redirect('user', 'refresh');
		}
	
	}
}
