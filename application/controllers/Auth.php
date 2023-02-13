<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
	{
		$data['title'] = 'HIMASI BSI | Login';
		$this->load->view('auth/login', $data);
	}

	public function login(){
		$email = $this->db->get_where('mahasiswa', ['email' => $this->input->post('email', true)])->row();
        if ($email){
            if(password_verify($this->input->post('password'), $email->password)){
                if ($email->status == 'admin'){
                    $data_session = [
                         'id' => $email->id,
                         'nama' => $email->nama,
                         'status' => $email->status,
                     ];
                    $this->session->set_userdata($data_session);
                    redirect("admin/dashboard");
                } else {
                    $data_session = [
                         'id' => $email->id,
                         'nama' => $email->nama,
                         'status' => $email->status,
                    ];
                    $this->session->set_userdata($data_session);
                    redirect("landing_page");
                }

            }else { 
                echo "<script>
                alert('password anda salah!');
                window.location.href = `" . site_url('auth/login') . "`;
                </script>";
               }

        } else {
            echo "<script>
                alert('NIK anda tidak terdaftar!');
                window.location.href = `" . site_url('auth/login') . "`;
             </script>";
        }
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
