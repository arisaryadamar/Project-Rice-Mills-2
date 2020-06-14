<?php 
 
class Penggilingan_model extends CI_Model{

    function getAll(){
        $this->db->select('*');
        $this->db->from('tb_penggilingan');
        $query = $this->db->get();
        //  $query= $this->db->get();
         return $query;
}

function input_data($data,$table){
    $query = $this->db->insert($table,$data);
    // $query = $this->db->get('tm_grup');
return $query;
}

function edit_data($where,$table){
    return $this->db->get_where($table,$where);
}
//membuat function update_data untuk pemanggilan di controller
function update_data($id_penggilingan,$data,$table){
    $this->db->where('id_penggilingan',$id_penggilingan);
    $berhasil = $this->db->update($table,$data);
    if($berhasil){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}

//membuat function hapus_data untuk pemanggilan di controller
function hapus_data($id_penggilingan,$table){
    $this->db->where('id_penggilingan', $id_penggilingan);
    $berhasil = $this->db->delete($table);
    if($berhasil){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}
    
}?>