<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public $user;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

		$this->user = new User_model();
	}

	public function index()
	{
		$this->load->view('test/login');
	}

	public function cek_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');


		$data_user = $this->user->getByEmail($email);

		if ($data_user) {
			if ($data_user['password'] === $password) {
				$user = array(
					'email'     => $data_user['email'],
					'logged_in' => TRUE
				);

				$this->session->set_userdata($user);
				redirect('user');
			} else {
				redirect('auth');
			}
		} else {
			redirect('auth');
		}
	}
}
