<?php
class Stok_model extends CI_Model{
  function selectAll(){
    return $this->db->get('stok')->result();
   }
 }
?>