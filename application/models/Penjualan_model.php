<?php 
 
class Penjualan_model extends CI_Model{

    function getAll(){
        $this->db->select('*');
        $this->db->from('tb_penjualan');
        $query = $this->db->get();
        //  $query= $this->db->get();
         return $query;
}

// function chart(){
//     $this->db->select('tgl,berat');
//     $this->db->from('tb_pemasokan');
//     $query = $this->db->get();
//     //  $query= $this->db->get();
//      return $query;
// }

function input_data($data,$table){
    $query = $this->db->insert($table,$data);
    // $query = $this->db->get('tm_grup');
return $query;
}
function update_kurang($kode_barang,$jumlah){
    
}

public function get_kode(){
    $this->db->select('*');
    $this->db->from('tb_hasil_giling');
    $query = $this->db->get();
    return $query;
}



function edit_data($where,$table){
    return $this->db->get_where($table,$where);
}
//membuat function update_data untuk pemanggilan di controller
function update_data($kode_barang,$data,$table){
    $this->db->where('kode_barang',$kode_barang);
    $berhasil = $this->db->update($table,$data);
    if($berhasil){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}

//membuat function hapus_data untuk pemanggilan di controller
function hapus_data($kode_barang,$table){
    $this->db->where('kode_barang', $kode_barang);
    $berhasil = $this->db->delete($table);
    if($berhasil){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}
    
}?>