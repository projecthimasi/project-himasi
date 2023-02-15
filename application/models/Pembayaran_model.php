<?php

class Pembayaran_model extends CI_Model
{
   private $data_peserta;

   public function __construct()
   {
      parent::__construct();
      // Set your Merchant Server Key
      \Midtrans\Config::$serverKey = 'SB-Mid-server-ZtkJDZbJTLs-rhd_vadnbh4O';
      // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
      \Midtrans\Config::$isProduction = false;
      // Set sanitization on (default)
      \Midtrans\Config::$isSanitized = true;
      // Set 3DS transaction for credit card to true
      \Midtrans\Config::$is3ds = true;
      $this->load->model('peserta_model');
      $this->load->model('seminar_model');
   }

   public function set_data($data)
   {
      $this->data_peserta = $data;
   }
   public function simpan()
   {
      $this->db->insert($this->_table, [
         'no_invoice' => $this->no_invoice,
         'id_peserta' => $this->id_peserta,
         'id_seminar' => $this->id_seminar,
         'nominal' => $this->nominal,
         'token_snap' => $this->token_snap
      ]);
   }

   public function getByIdPeserta()
   {
      return $this->db->get_where($this->_table, array('id_peserta' => $this->id_peserta))->row_array();
   }

   public function buat_tagihan()
   {
      $params = array(
         "transaction_details" => array(
            "order_id"     => $this->no_invoice,
            "gross_amount" => $this->nominal,
         ),
         "detail_item" => array(),
         "customer_details" => array(
            "first_name" => $this->customer_name,
            "phone"      => $this->customer_noHandphon,
         ),
         "shopeepay" => array(
            "callback_url" => "http://shopeepay.com"
         ),
         "gopay" => array(
            "enable_callback" => true,
            "callback_url" => "http://gopay.com"
         ),
         "callbacks" => array(
            "finish" => "https://demo.midtrans.com"
         ),
         "expiry" => array(
            "unit"     => "minutes",
            "duration" => 5
         )
      );

      $snapToken = \Midtrans\Snap::getSnapToken($params);

      $this->token_snap = $snapToken;
   }

   public function updateStatus($value)
   {
      $data = array(
         'status' => $value,
      );
      return $this->db->update($this->_table, $data, array('no_invoice' => $this->no_invoice));
   }
}
