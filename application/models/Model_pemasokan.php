<?php 
 
class Model_pemasokan extends CI_Model{

    function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pemasokan');
        $query = $this->db->get();
        //  $query= $this->db->get();
         return $query;
}

function chart(){
    $this->db->select('tgl,berat');
    $this->db->from('tb_pemasokan');
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
function update_data($id_pemasokan,$data,$table){
    $this->db->where('id_pemasokan',$id_pemasokan);
    $berhasil = $this->db->update($table,$data);
    if($berhasil){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}

//membuat function hapus_data untuk pemanggilan di controller
function hapus_data($id_pemasokan,$table){
    $this->db->where('id_pemasokan', $id_pemasokan);
    $berhasil = $this->db->delete($table);
    if($berhasil){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}
    
}?>