<?php

class Pembayaran_model extends CI_Model
{
   private $data_peserta;
   private $data_seminar;
   private $data_htm;
   private $no_invoice;

   private $_table = 'pembayaran';


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
   }




   public function simpan()
   {
      $this->data_peserta = $this->Peserta_model->getByNim($this->input->post('nim'));
      $this->data_seminar = $this->Seminar_model->getById($this->input->post('id_seminar'));
      $this->data_htm = $this->Model_htm->getById_Seminar($this->input->post('id_seminar'));
      $this->no_invoice = time();


      // var_dump($this->data_peserta);
      // echo "<br>";
      // echo "<br>";
      // var_dump($this->input->post());
      // echo "<br>";
      // echo "<br>";
      // var_dump($this->data_seminar);

      // die;

      $this->db->insert($this->_table, [
         'no_invoice' => $this->no_invoice,
         'id_peserta' => $this->data_peserta['id'],
         'id_seminar' => $this->data_seminar['id'],
         'nominal' => $this->data_htm['harga'],
         'token_snap' => $this->buat_token_snap()
      ]);
   }

   public function buat_token_snap()
   {

      $params = array(
         "transaction_details" => array(
            "order_id"     => $this->no_invoice,
            "gross_amount" => $this->data_htm['harga'],
         ),
         "detail_item" => array(),
         "customer_details" => array(
            "first_name" => $this->data_peserta['nama'],
            "phone"      => $this->data_peserta['no_tlp'],
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
      return $snapToken;
   }

   public function updateStatus($value)
   {
      $data = array(
         'status' => $value,
      );
      return $this->db->update($this->_table, $data, array('no_invoice' => $this->no_invoice));
   }

   public function getByIdPeserta($id_peserta)
   {
      return $this->db->get_where($this->_table, array('id_peserta' => $id_peserta))->row_array();
   }

   public function getBy_NoInvoice($no_invoice)
   {
      return $this->db->get_where($this->_table, array('no_invoice' => $no_invoice))->row_object();
   }
   public function updateBy_NoInvoice($no_invoice)
   {
      return $this->db->update($this->_table, ["status" => "lunas"], array('no_invoice' => $no_invoice));
   }
}
