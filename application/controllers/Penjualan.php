<?php
class Penjualan extends CI_Controller{
	//fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	function __construct(){ 
		/*Jika menggunakan construct di controller, parent::__constructor diperlukan 
		karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
		parent::__construct();
		//load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
		$this->load->model('Penjualan_model');
		
	}
	public function index(){
        $data['penjualan'] = $this->Penjualan_model->getAll()->result();
        $this->load->view('crud/Data_penjualan',$data);
	}
	
	public function Api(){
		$data = $this->Penjualan_model->getAll();
		echo json_encode($data->result_array());
	}

	public function chart(){
        $data['penjualan'] = $this->Penjualan_model->getAll();
        $this->load->view('crud/grafikpasok_view',$data);
    }

    public function tambah(){
        $data['penjualan'] = $this->Penjualan_model->getAll()->result();
        $data['kode'] = $this->Penjualan_model->get_kode()->result();
        $this->load->view('crud/input_penjualan', $data);
        
	}

    public function input(){
		$Kode_barang = $this->input->post('kode');
        $Jumlah = $this->input->post('jumlah');
		$Harga = $this->input->post('harga');
		$Total_harga = $this->input->post('total');
		$tanggal = $this->input->post('tanggal');
        $data = array(
			"Kode_barang" => $Kode_barang,
            'Jumlah' => $Jumlah,
			'Harga' => $Harga,
			'Total_harga' => $Total_harga,
			'tanggal' => $tanggal
		);
        $berhasil = $this->Penjualan_model->input_data($data,'tb_penjualan');
            $this->db->where('kode_barang',$kode_barang);
            $a = $this->db->get()->result('stok');
            echo $a;
            // $this->Penjualan_model->update_kurang($jumlah,$Kode_barang);
        }
				

	//membuat function edit dengan parameter id
	public function edit($id){
		//membuat array dengan parameter where
		$where = array('kode_barang' => $id);
		//array grup dengan parameter data dan memanggil mahasiswal model dengan parameter getgrup
		$data['penjualan'] = $this->Penjualan_model->edit_data($where,'tb_penjualan')->result();
		$this->load->view('crud/edit_penjualan', $data);
	}

	//membuat function update
	public function update(){
		//membuat inputan pada update data
		$kode_barang = $this->input->post('kode_barang');
		$Jumlah = $this->input->post('Jumlah$Jumlah');
		$Harga = $this->input->post('Harga');
		$Total_harga = $this->input->post('Total$Total_harga');
        $tanggal = $this->input->post('tanggal');
        $berat = $this->input->post('berat');
        $harga = $this->input->post('harga');

		$data = array(
			'kode_barang' => $kode_barang,
            'Jumlah$Jumlah' => $Jumlah,
			'Harga' => $Harga,
			'Total$Total_harga' => $Total_harga,
			'tanggal' => $tanggal
		);

		

		$this->Penjualan_model->update_data($kode_barang,$data,'tb_penjualan');
			redirect('Penjualan');
	}

	public function hapus(){
		$kode_barang = $this->uri->segment(3);
		$this->Penjualan_model->hapus_data($kode_barang, 'tb_penjualan');
		redirect('Penjualan');
	}

}?>