<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminar extends CI_Controller
{


   public function index()
   {
      $data = [
         'title' => 'Himasi | Seminar'
      ];

      $this->load->view('seminar/header', $data);
      $this->load->view('seminar/index', $data);
      $this->load->view('seminar/footer');
   }

   public function daftar()
   {
      $data = [
         'title' => 'Form Pendaftaran'
      ];
      if ($_POST != null) {
         return var_dump($_POST);
      }
      $this->load->view('seminar/header', $data);
      $this->load->view('seminar/form_pendaftaran', $data);
      $this->load->view('seminar/footer');
   }

   public function bayar()
   {
      $data = [
         'title' => 'Invoice'
      ];

      $this->load->view('seminar/header', $data);
      $this->load->view('seminar/tagihan', $data);
      $this->load->view('seminar/footer');
   }
}
