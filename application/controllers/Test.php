<?php
class Test extends CI_Controller

{
   public function index()
   {

      $this->load->view('test/daftar');
   }

   public function simpan()
   {
      $this->load->model('peserta_model');

      $peserta = new Peserta_model;
      $peserta->simpan();
   }

   public function data_peserta()
   {
      $this->load->model('peserta_model');

      $peserta = new Peserta_model;
      $data_peserta = $peserta->getAll();
      var_dump($data_peserta);
   }



   public function pendaftaran()
   {
      $data = [
         'email' => 'muhammadjajaroyana3@gmail.com'
      ];
      $this->load->model('model_pendaftaran');
      $pendaftaran = new Model_Pendaftaran();
      $pendaftaran->set_data($data);
      var_dump($pendaftaran->is_exist());
   }
}
