<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminar extends CI_Controller
{

   public $seminar;
   public $peserta;
   public $invoice;
   public function __construct()
   {
      parent::__construct();
      $this->load->model('Seminar_model');
      $this->load->model('Peserta_model');
      $this->load->model('Invoice_model');
      $this->seminar = new Seminar_model();
      $this->peserta = new Peserta_model();
      $this->invoice = new Invoice_model();
   }
   /**
    * Index Page for this controller.
    *
    * Maps to the following URL
    * 		http://example.com/index.php/welcome
    *	- or -
    * 		http://example.com/index.php/welcome/index
    *	- or -
    * Since this controller is set as the default controller in
    * config/routes.php, it's displayed at http://example.com/
    *
    * So any other public methods not prefixed with an underscore will
    * map to /index.php/welcome/<method_name>
    * @see https://codeigniter.com/userguide3/general/urls.html
    */
   public function index()
   {

      $data['seminar'] = $this->seminar->getAll();
      $this->load->view('test/seminar', $data);
   }
   public function daftar()
   {
      $this->load->view('test/daftar');
   }
   public function proses_daftar()
   {
      // simpang data dari form pendaftaran ke database peserta
      $this->peserta->save();

      // ambil data dari database peserta


      $peserta = $this->peserta->getByNim($this->input->post('nim'));

      // var_dump($peserta);
      // die;


      $invoice = $this->generat_invoice();

      $data_invoice = [
         'no_invoice' => $invoice,
         'status' => 'pandding',
         'id_peserta' => $peserta['id'],
         'id_seminar' => $this->input->post('id_seminar'),
      ];

      // var_dump($data_invoice);
      // die;
      $this->invoice->save($data_invoice);
      $this->invoice($data_invoice);
   }


   public function generat_invoice()
   {
      $permitted_chars = '0123456789';
      return substr(str_shuffle($permitted_chars), 0, 10);
   }

   private function invoice($data_invoice)
   {
      $data_peserta = $this->peserta->getById($data_invoice['id_peserta']);
      $data_seminar = $this->seminar->getById($data_invoice['id_seminar']);
      $snapToken = $this->request_token($data_invoice);
      $data = [
         'no_invoice' => $data_invoice['no_invoice'],
         'nama' => $data_peserta['nama'],
         'htm' => $data_seminar['htm'],
         'snapToken' => $snapToken
      ];


      $this->load->view('test/bayar', $data);
   }



   private function request_token($data_invoice)
   {

      // Set your Merchant Server Key
      \Midtrans\Config::$serverKey = 'SB-Mid-server-ZtkJDZbJTLs-rhd_vadnbh4O';
      // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
      \Midtrans\Config::$isProduction = false;
      // Set sanitization on (default)
      \Midtrans\Config::$isSanitized = true;
      // Set 3DS transaction for credit card to true
      \Midtrans\Config::$is3ds = true;

      $data_peserta = $this->peserta->getById($data_invoice['id_peserta']);
      $data_seminar = $this->seminar->getById($data_invoice['id_seminar']);


      $params = array(
         'transaction_details' => array(
            'order_id' => $data_invoice['no_invoice'],
            'gross_amount' => $data_seminar['htm'],
         ),
         'customer_details' => array(
            'first_name' => $data_peserta['nama'],
            'email' => $data_peserta['email'],
            'phone' => $data_peserta['no_tlp'],
         ),
      );

      $snapToken = \Midtrans\Snap::getSnapToken($params);


      return $snapToken;
   }
}
