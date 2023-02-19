<?php
class Model_htm extends CI_Model
{
   public function getById_Seminar($id)
   {
      return $this->db->get_where('htm', ['id_seminar' => $id])->row_array();
   }
}
