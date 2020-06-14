<?php 
 
class Penjualan_model extends CI_Model{

    private $_table = "tb_penjualan";

    public $No;
    public $kode_barang;
    public $Jumlah;
    public $Harga;
    public $Total_harga;
    public $tanggal;

    public function rules()
    {
        return [
            ['field' => 'kode_barang',
            'label' => 'kode_barang',
            'rules' => 'required'],

            ['field' => 'Jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric'],

            ['field' => 'Harga',
            'label' => 'Harga',
            'rules' => 'required'],

            ['field' => 'Total_harga',
            'label' => 'Total_harga',
            'rules' => 'required'],

            ['field' => 'tanggal;',
            'label' => 'tanggal',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["No" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_barang = $post["kode_barang"];
        $this->Jumlah = $post["Jumlah"];
        $this->Harga = $post["Harga"];
        $this->Total_harga = $post["Total_harga"];
        $this->tanggal = $post["tanggal"];
        return $this->db->insert($this->_table, $this);
    }
    
    public function update()
    {
        $post = $this->input->post();
        $this->kode_barang = $post["kode_barang"];
        $this->Jumlah = $post["Jumlah"];
        $this->Harga = $post["Harga"];
        $this->Total_harga = $post["Total_harga"];
        $this->tanggal = $post["tanggal"];
        return $this->db->update($this->_table, $this, array('No' => $post['No']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("No" => $No));
    }

    public function get_kode(){
        $this->db->select('*');
        $this->db->from('tb_hasil_giling');
        $query = $this->db->get();
        return $query;
    }

    function input($penjualan){
        $this->db->insert('penjualan',$penjualan);
    }
}
?>