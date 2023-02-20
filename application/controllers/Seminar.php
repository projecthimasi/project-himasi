<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Seminar extends CI_Controller
{

   private $peserta;
   private $seminar;
   private $pembayaran;
   private $pendaftaran;

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Seminar_model');
      $this->load->model('Peserta_model');
      $this->load->model('Pembayaran_model');
      $this->load->model('Model_Pendaftaran');
      $this->load->model('Model_htm');

      // inisialisai model
      $this->peserta = new Peserta_model;
      $this->seminar = new Seminar_model;
      $this->pembayaran = new Pembayaran_model;
      $this->pendaftaran = new Model_Pendaftaran;
   }
   public function index()
   {
      $data = [
         'title' => 'Himasi | Seminar',
         'seminar' => $this->seminar->getAll()
      ];

      $this->load->view('seminar/header', $data);
      $this->load->view('seminar/index', $data);
      $this->load->view('seminar/footer');
   }
   public function daftar()
   {
      $data = [
         'title' => 'Form Pendafatran'
      ];

      $this->form_validation->set_rules($this->pendaftaran->rule());

      if (!$this->form_validation->run()) {
         $this->load->view('seminar/header', $data);
         $this->load->view('seminar/form_pendaftaran', $data);
         $this->load->view('seminar/footer');
      } else {
         $this->pendaftaran->proses();
         redirect(base_url('seminar/pembayaran'));
      }
   }



   public function pembayaran()
   {
      // menampilkan ke view 
      $data['peserta'] = $this->peserta->getByEmail('muhammadjajaroyana3@gmail.com');
      $data['seminar'] = $this->seminar->getById(1);
      $data['pembayaran'] = $this->pembayaran->getByIdPeserta($data['peserta']['id']);
      $this->load->view('test/bayar', $data);
      // set data midtram

   }

   public function bayar()
   {
      $data = [
         'title' => 'Invoice'
      ];

      $this->load->view('seminar/header', $data);
      $this->load->view('seminar/tagihan', $data);
      $this->load->view('seminar/footer');
   }
}
