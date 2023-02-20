<?php


class Respon extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      // $this->set_data();
      $this->load->model('Pembayaran_model');
      $this->load->model('Peserta_model');
      $this->load->model('Model_daftar_hadir');
   }

   public function index()
   {

      // Set your Merchant Server Key
      \Midtrans\Config::$serverKey = 'SB-Mid-server-ZtkJDZbJTLs-rhd_vadnbh4O';
      // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
      \Midtrans\Config::$isProduction = false;
      // Set sanitization on (default)
      \Midtrans\Config::$isSanitized = true;
      // Set 3DS transaction for credit card to true
      \Midtrans\Config::$is3ds = true;



      // inisialisai
      $pembayaran = new pembayaran_model;
      $peserta    = new peserta_model;
      $daftar_hadir = new Model_daftar_hadir;

      $notification = new Midtrans\Notification();

      $notif = $notification->getResponse();

      $transaction = $notif->transaction_status;
      $no_invoice = $notif->order_id;


      // ambil data pembayaran berdasarkan no_onvoice
      $data_pembayaran = $pembayaran->getBy_NoInvoice($no_invoice);

      if ($transaction == 'settlement') {
         // TODO set payment status in merchant's database to 'Settlement'
         $pembayaran->updateBy_NoInvoice($no_invoice);
         $daftar_hadir->tambah($data_pembayaran);
      } else if ($transaction == 'pending') {
         // TODO set payment status in merchant's database to 'Pending'
      } else if ($transaction == 'deny') {
         // TODO set payment status in merchant's database to 'Denied'
      } else if ($transaction == 'expire') {
         // TODO set payment status in merchant's database to 'expire'
         $data_pembayaran = $pembayaran->getBy_NoInvoice($no_invoice);
         $peserta->delete($data_pembayaran['id_peserta']);
      }
   }
}
