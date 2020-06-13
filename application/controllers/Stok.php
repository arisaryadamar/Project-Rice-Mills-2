<?php
class Stok extends CI_Controller{
  function __construct(){ 
    parent::__construct();
     $this->load->model('Stok_model');
  }

 function index(){
    
    $data['stok'] = $this->Stok_model->selectAll();
    $this->load->view('crud/Stok_view',$data);
   }
 }
?>