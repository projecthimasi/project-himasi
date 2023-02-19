<?php

// require 'Pembayaran_model.php';
// require 'Peserta_model';

class Model_Pendaftaran extends CI_Model
{
   private $peserta;
   private $seminar;
   private $pembayaran;
   private $htm;



   public function __construct()
   {
      parent::__construct();
      // $this->set_data();
      $this->pembayaran = new Pembayaran_model;
      $this->peserta = new Peserta_model;
   }
   public function rule()
   {
      return [
         [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required|max_length[50]'
         ],
         [
            'field' => 'nim',
            'label' => 'Nim',
            'rules' => 'required|max_length[8]'
         ],
         [
            'field' => 'semester',
            'label' => 'Semester',
            'rules' => 'required'
         ],
         [
            'field' => 'program_studi',
            'label' => 'Program studi',
            'rules' => 'required'
         ],
         [
            'field' => 'kampus',
            'label' => 'Asal kampus',
            'rules' => 'required'
         ],
         [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|max_length[50]'
         ],
         [
            'field' => 'no_tlp',
            'label' => 'Nomor telepon',
            'rules' => 'required|max_length[15]'
         ],

      ];
   }

   public function proses()
   {
      $this->peserta->simpan();
      $this->pembayaran->simpan();
   }
}
