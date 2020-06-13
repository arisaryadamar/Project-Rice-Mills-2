<?php 
 
class Penggilingan_model extends CI_Model{

    private $_table = "tb_penggilingan";

    public $id_penggilingan;
    public $id_stok = 1;
    public $Tanggal;
    public $Berat;
    public $Biaya_Penggilingan;


    public function rules()
    {
        return [
            ['field' => 'Tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'],

            ['field' => 'Berat',
            'label' => 'Berat',
            'rules' => 'numeric'],
            
            ['field' => 'Biaya_Penggilingan',
            'label' => 'Biaya_Penggilingan',
            'rules' => 'numeric']
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_penggilingan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->Tanggal = $post["Tanggal"];
        $this->Berat = $post["Berat"];
        $this->Biaya_Penggilingan = $post["Biaya_Penggilingan"];
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id_penggilingan = $post["id_penggilingan"];
        $this->Tanggal = $post["Tanggal"];
        $this->Berat = $post["Berat"];
        $this->Biaya_Penggilingan = $post["Biaya_Penggilingan"];
        return $this->db->update($this->_table, $this, array('id_penggilingan' => $post['id_penggilingan']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_penggilingan" => $id));
    }
}
?>