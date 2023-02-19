<?php


class Respon extends CI_Controller
{
   private $pembayaran;
   private $peserta;
   public function __construct()
   {
      parent::__construct();
      // $this->set_data();
      $this->load->model('Pembayaran_model');
      $this->load->model('Peserta_model');

      $this->pembayaran = new pembayaran_model;
      $this->peserta = new peserta_model;
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




      $notification = new Midtrans\Notification();
      $notif = $notification->getResponse();
      $transaction = $notif->transaction_status;
      $no_invoice = $notif->order_id;


      if ($transaction == 'settlement') {
         // TODO set payment status in merchant's database to 'Settlement'
         $this->pembayaran->updateBy_NoInvoice($no_invoice);
      } else if ($transaction == 'pending') {
         // TODO set payment status in merchant's database to 'Pending'
      } else if ($transaction == 'deny') {
         // TODO set payment status in merchant's database to 'Denied'
      } else if ($transaction == 'expire') {
         // TODO set payment status in merchant's database to 'expire'
         $data_pembayaran = $this->pembayaran->getBy_NoInvoice($no_invoice);
         $this->peserta->delete($data_pembayaran->id_peserta);
      } else if ($transaction == 'cancel') {
         // TODO set payment status in merchant's database to 'Denied'
         echo "Payment using "  . " for transaction order_id: " . $no_invoice . " is canceled.";
      }

      die;



      if ($status == "200") {
      } elseif ($status == "settlement") {
         return;
      } elseif ($status == "expire") {
         echo "masuk";
         return;
      }
   }
}
