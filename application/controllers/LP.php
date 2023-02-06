<?php

class LP extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'HIMASI UBSI';
        $this->load->view('landing_page/index', $data);
    }

}
