<?php

require_once 'Pembayaran_model.php';

class Model_Pendaftaran extends CI_Model
{
   private $data_peserta;


   public function __construct()
   {
      parent::__construct();
      // $this->set_data();
      $pembayaran = new Pembayaran_model;
   }

   public function set_data($data = null)
   {
      $this->data_peserta = $data;
   }

   public function simpan()
   {
      $this->db->insert($this->data_peserta);
      $this->getByEmail();
   }


   public function is_exist()
   {

      $result =  $this->db->get_where('peserta', ['email' => $this->data_peserta['email']]);
      if ($result) {
         return false;
      }
   }

   public function getByEmail()
   {
      return $this->db->get_where('peserta', ['email' => $this->data_peserta['email']]);
   }
}
