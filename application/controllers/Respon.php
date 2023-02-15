<?php


class Respon extends CI_Controller
{

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




      $notif = new Midtrans\Notification();
      $no_invoice = $notif->order_id;
      $kode       = $notif->status_code;



      if ($kode == "200") {
         $value = 'Lunas';
         $invoice->updateStatus($no_invoice, $value);
      } elseif ($kode == "201") {
         $value = 'Pending';
         $invoice->updateStatus($no_invoice, $value);
      } elseif ($kode == "202") {
      }
   }
   public function update()
   {
      $this->load->model("invoice_model");
      $invoice = new Invoice_model;
      $value = 'gagal';
      $invoice->updateStatus('7628103594', $value);
   }
}
