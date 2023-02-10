<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
   public function save($data)
   {
      $this->db->insert('invoice', $data);
   }
}
