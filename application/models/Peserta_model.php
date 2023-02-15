<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{


   // property
   public $id;
   public $nim;
   public $nama;
   public $email;
   public $semester;
   public $program_studi;
   public $kampus;
   public $no_tlp;

   // nama tabale
   private $_table = 'peserta';

   // method 
   public function rule()
   {
      return [
         [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required|max_length[50]'
         ],
         [
            'field' => 'nim',
            'label' => 'Nim',
            'rules' => 'required|max_length[8]'
         ],
         [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|max_length[50]'
         ],
         [
            'field' => 'no_tlp',
            'label' => 'Nomor telepon',
            'rules' => 'required|max_length[15]'
         ],
         [
            'field' => 'program_studi',
            'label' => 'Program studi',
            'rules' => 'required'
         ],

      ];
   }
   public function simpan()
   {

      $this->db->insert($this->_table, $this);
   }


   public function getAll()
   {
      return $this->db->get($this->_table)->row_array();
   }

   public function getByNim()
   {
      return $this->db->get_where($this->_table, array('nim' => $this->nim))->row_array();
   }

   public function getById()
   {
      return $this->db->get_where($this->_table, array('id' => $this->id))->row_array();
   }
}
