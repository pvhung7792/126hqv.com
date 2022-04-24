<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		if($this->session->userdata('is_login') == 1) {
			if($this->session->userdata('user_role') == 1){
				redirect('admin/dashboard');
			}elseif($this->session->userdata('user_role') == 2){
				redirect('user/dashboard');
			}
		}else{
			redirect('login/login');
		}
	}

	public function login()
	{
		$page_data['page_title'] = 'login';
		$page_data['page_name'] = 'login_page';
		$this->load->view('index', $page_data);
	}

	public function not_found()
	{
		$this->load->view('errors/cli/error_404');
	}

	public function validate()
	{
		$validate = $this->login_model->validate_user();
		if(!$validate){
			$this->session->set_flashdata('error_message', 'tài khoản hoặc mật khẩu sai');
			redirect('login/login', 'refresh');
		}
		$this->session->set_flashdata('flash_message', 'đăng nhập thành công');
			redirect('login/login', 'refresh');
	
	}
}
