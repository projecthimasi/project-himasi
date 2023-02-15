<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		var_dump($this->session->userdata('logged_in'));
	}

	public function unset()
	{
		// $this->session->unset_userdata();
		// $this->session->sess_destroy();
		$this->session->unset_userdata('email', 'logged_in');
		$this->session->unset_userdata('logged_in');
	}
}
