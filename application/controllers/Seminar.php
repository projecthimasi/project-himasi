<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminar extends CI_Controller
{


   public function index()
   {
      $this->load->view('seminar/index');
   }
}
