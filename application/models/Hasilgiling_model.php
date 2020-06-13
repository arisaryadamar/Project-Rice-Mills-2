<?php
class Hasilgiling_model extends CI_Model{

	private $_table = "tb_hasil_giling";

    public $kode_barang;
    public $ukuran_sak;
    public $stok;

    public function rules()
    {
        return [
            ['field' => 'kode_barang',
            'label' => 'kode_barang',
            'rules' => 'required'],

            ['field' => 'ukuran_sak',
            'label' => 'ukuran_sak',
            'rules' => 'required'],
            
            ['field' => 'stok',
            'label' => 'stok',
            'rules' => 'numeric']
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_barang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_barang = $post["kode_barang"];
        $this->ukuran_sak = $post["ukuran_sak"];
        $this->stok = $post["stok"];
        return $this->db->insert($this->_table, $this);
    }
	public function update()
    {
        $post = $this->input->post();
        $this->kode_barang = $post["kode_barang"];
        $this->ukuran_sak = $post["ukuran_sak"];
        $this->stok = $post["stok"];
        return $this->db->update($this->_table, $this, array('kode_barang' => $post['kode_barang']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_barang" => $id));
    }
    public function tambahStok($id){
        $post = $this->input->get();
        $this->kode_barang = $get["kode_barang"];
        $this->stok = $get["stok"];
        $this->stokk = $get['stokk'];
        $this->jumlah = $get[intval($stok) + intval($stokk)];
        $this->db->set('stok', $jumlah);
        $this->db->where('kode_barang', $id);
        return $this->db->update($this->_table);
    }
}

?>