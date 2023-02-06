<?php

class Landing_Page extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'HIMASI UBSI';
        $this->load->view('landing_page/header', $data);
        $this->load->view('landing_page/index', $data);
        $this->load->view('landing_page/footer', $data);
    }

    public function seminar()
    {
        $data['title'] = 'Daftar Seminar';
        $this->load->view('landing_page/header', $data);
        $this->load->view('landing_page/seminar', $data);
        $this->load->view('landing_page/footer', $data);
    }

    public function form_pendaftaran()
    {
        $data['title'] = 'Daftar Seminar';
        $this->load->view('landing_page/header', $data);
        $this->load->view('landing_page/form_pendaftaran', $data);
        $this->load->view('landing_page/footer', $data);
    }

    public function invoice()
    {
        $data['title'] = 'Invoice';
        $this->load->view('landing_page/header', $data);
        $this->load->view('landing_page/invoice', $data);
        $this->load->view('landing_page/footer', $data);
    }
}
