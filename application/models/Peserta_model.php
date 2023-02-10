<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{
   public function save()
   {
      $data = [
         "nim" => $this->input->post('nim'),
         "nama" => $this->input->post('nama'),
         "email" => $this->input->post('email'),
         "semester" => $this->input->post('semester'),
         "program_studi" => $this->input->post('program_studi'),
         "kampus" => $this->input->post('kampus'),
         "no_tlp" => $this->input->post('no_tlp')
      ];
      $this->db->insert('peserta', $data);
   }

   public function getByNim($nim)
   {
      return $this->db->get_where('peserta', array('nim' => $nim))->row_array();
   }
   public function getById($id)
   {
      return $this->db->get_where('peserta', array('id' => $id))->row_array();
   }
}
