<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seminar_model extends CI_Model
{
   public function getAll()
   {
      return $this->db->get('seminar')->result_array();
   }

   public function getById($id)
   {
      return $this->db->get_where('seminar', array('id' => $id))->row_array();
   }
}
