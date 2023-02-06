<?php

class Seminar extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Seminar';
        $this->load->view('seminar/index', $data);
    }

    public function pendaftaran()
    {
        $data['title'] = 'Seminar';
        $this->load->view('seminar/pendaftaran', $data);
    }

}
