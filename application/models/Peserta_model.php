<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{


   // nama tabale
   private $_table = 'peserta';

   // method rules

   public function simpan()
   {
      // parsing_data
      $data_pendaftar['nim']      = $this->input->post('nim', true);
      $data_pendaftar['nama']     = $this->input->post('nama', true);
      $data_pendaftar['email']    = $this->input->post('email', true);
      $data_pendaftar['semester'] = $this->input->post('semester', true);
      $data_pendaftar['program_studi'] = $this->input->post('program_studi', true);
      $data_pendaftar['kampus'] = $this->input->post('kampus', true);
      $data_pendaftar['no_tlp'] = $this->input->post('no_tlp', true);
      $this->db->insert($this->_table, $data_pendaftar);
   }




   public function getAll()
   {
      return $this->db->get($this->_table)->result_array();
   }
   public function getByNim($nim)
   {
      return $this->db->get_where($this->_table, array('nim' => $nim))->row_array();
   }
   public function getByEmail($email)
   {
      return $this->db->get_where($this->_table, array('email' => $email))->row_array();
   }
   public function getById($id)
   {
      return $this->db->get_where($this->_table, array('id' => $id))->row_array();
   }
   public function delete($id)
   {
      $this->db->delete($this->_table, array('id' => $id));
   }
}
