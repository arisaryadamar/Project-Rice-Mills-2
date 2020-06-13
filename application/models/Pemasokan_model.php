<?php 
 
class Pemasokan_model extends CI_Model{

    private $_table = "tb_pemasokan";

    public $id_pemasokan;
    public $id_stok = 1;
    public $tgl;
    public $nama;
    public $nmr;
    public $alamat;
    public $Berat;
    public $harga;

    public function rules()
    {
        return [
            ['field' => 'tgl',
            'label' => 'tgl',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'nmr',
            'label' => 'nmr',
            'rules' => 'numeric'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'Berat',
            'label' => 'Berat',
            'rules' => 'numeric'],
            
            ['field' => 'harga',
            'label' => 'harga',
            'rules' => 'numeric']
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pemasokan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_pemasokan = uniqid();
        $this->tgl = $post["tgl"];
        $this->nama = $post["nama"];
        $this->nmr = $post["nmr"];
        $this->alamat = $post["alamat"];
        $this->Berat = $post["Berat"];
        $this->harga = $post["harga"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pemasokan = $post["id_pemasokan"];
        $this->tgl = $post["tgl"];
        $this->nama = $post["nama"];
        $this->nmr = $post["nmr"];
        $this->alamat = $post["alamat"];
        $this->Berat = $post["Berat"];
        $this->harga = $post["harga"];
        return $this->db->update($this->_table, $this, array('id_pemasokan' => $post['id_pemasokan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pemasokan" => $id));
    }
}
?>