<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{


   public function index()
   {
      $this->load->view('pages/header');
      $this->load->view('pages/navbar-page');
      $this->load->view('pages/index');
      $this->load->view('pages/footer');
   }
   public function seminar()
   {
      $this->load->view('pages/header');
      $this->load->view('pages/seminar');
      $this->load->view('pages/footer');
   }
}
