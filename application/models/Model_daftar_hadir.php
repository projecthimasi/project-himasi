<?php
class Model_daftar_hadir extends CI_Model
{


   public function __construct()
   {
      parent::__construct();
   }

   public function tambah($data)
   {
      $data_daftarHadir = [
         "id_peserta" => $data['id_peserta'],
         "id_seminar" => $data['id_seminar'],
         "status" => "Tidak Hadir",
         "token_qr" => time()
      ];
      $this->db->insert('daftar_hadir', $data_daftarHadir);
      $this->generate($data_daftarHadir['token_qr']);
   }

   public function generate($token)
   {
      $this->load->library('ciqrcode');

      // nama folder tempat penyimpanan file qrcode
      $penyimpanan = "assets/img/qrcode/";

      // membuat folder dengan nama "temp"
      if (!file_exists($penyimpanan))
         mkdir($penyimpanan);

      // isi qrcode yang ingin dibuat. akan muncul saat di scan
      $isi = $token;

      // perintah untuk membuat qrcode dan menyimpannya dalam folder assets/img/qrcode/
      QRcode::png($isi, $penyimpanan . "$isi.png");
   }
}
