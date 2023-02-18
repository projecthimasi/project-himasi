<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Seminar extends CI_Controller
{

   private $peserta;
   private $seminar;
   private $pembayaran;

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Seminar_model');
      $this->load->model('Peserta_model');
      $this->load->model('Pembayaran_model');

      // inisialisai model
      $this->peserta = new Peserta_model;
      $this->seminar = new Seminar_model;
      $this->pembayaran = new Pembayaran_model;
   }
   public function index()
   {
      $data = [
         'title' => 'Himasi | Seminar'
      ];

      $this->load->view('seminar/header', $data);
      $this->load->view('seminar/index', $data);
      $this->load->view('seminar/footer');
   }


   public function proses_daftar()
   {
      // ambil data seminar berdasarkan id
      $data_seminar = $this->seminar->getById($this->input->post('id_seminar'));

      // membuat no_invoice
      $no_invoice = substr(str_shuffle('0123456789'), 0, 10);

      // set atribut peserta
      $this->peserta->id            = time();
      $this->peserta->nim           = $this->input->post('nim',);
      $this->peserta->nama          = $this->input->post('nama');
      $this->peserta->email         = $this->input->post('email');
      $this->peserta->semester      = $this->input->post('semester');
      $this->peserta->program_studi = $this->input->post('program_studi');
      $this->peserta->kampus        = $this->input->post('kampus');
      $this->peserta->no_tlp        = $this->input->post('no_tlp');
      $this->peserta->simpan();

      // set atribut pembayaran
      $this->pembayaran->no_invoice = $no_invoice;
      $this->pembayaran->id_peserta = $this->peserta->id;
      $this->pembayaran->id_seminar = $data_seminar['id'];
      $this->pembayaran->nominal = $data_seminar['htm'];
      $this->pembayaran->customer_name = $this->peserta->nama;
      $this->pembayaran->customer_noHandphon = $this->peserta->no_tlp;

      $this->pembayaran->buat_tagihan();

      // simpan data invoice
      $this->pembayaran->simpan();
      $this->pembayaran();
   }

   public function pembayaran()
   {
      // menampilkan ke view 
      $data['peserta'] = $this->peserta->getById();
      $data['seminar'] = $this->seminar->getById($this->pembayaran->id_seminar);
      $data['pembayaran'] = $this->pembayaran->getByIdPeserta($this->peserta->id);
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
