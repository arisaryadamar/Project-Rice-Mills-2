<?php
class Hasilgiling extends CI_Controller{
	function __construct(){ 
		/*Jika menggunakan construct di controller, parent::__constructor diperlukan 
		karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
		parent::__construct();
		//load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
		$this->load->model('Hasilgiling_model');
	}
    public function index(){
        $data['hasilgiling'] = $this->Hasilgiling_model->getAll()->result();
        $this->load->view('crud/Data_hasilgiling',$data);
	}
	
	public function Api(){
		$data = $this->Penggilingan_model->getAll();
		echo json_encode($data->result_array());
	}

    public function tambah(){
		$data['hasilgiling'] = $this->Hasilgiling_model->getAll()->result();
		$this->load->view('crud/Tambah_hasilgiling', $data);
	}

    public function input(){
        $kode_barang = $this->input->post('kode_barang');
		$ukuran_sak = $this->input->post('ukuran_sak');
		$stok = $this->input->post('stok');

		$data = array(
            'kode_barang' => $kode_barang,
			'ukuran_sak' => $ukuran_sak,
			'stok' => $stok
		);

		$this->Hasilgiling_model->input_data($data,'tb_hasil_giling');
			redirect('Hasilgiling');
		
	}

	//membuat function edit dengan parameter id
	public function edit($id){
		//membuat array dengan parameter where
		$where = array('kode_barang' => $id);
		//array grup dengan parameter data dan memanggil mahasiswal model dengan parameter getgrup
		$data['hasilgiling'] = $this->Hasilgiling_model->edit_data($where,'tb_hasil_giling')->result();
		$this->load->view('crud/edit_hasilgiling', $data);
	}

	//membuat function update
	public function update(){
		//membuat inputan pada update data
        $kode_barang = $this->input->post('kode_barang');
		$ukuran_sak = $this->input->post('ukuran_sak');
		$stok = $this->input->post('stok');

		$data = array(
			'ukuran_sak' => $ukuran_sak,
			'stok' => $stok
		);

		$this->Hasilgiling_model->update_data($kode_barang, $data,'tb_hasil_giling');
			redirect('Hasilgiling');
		
    }
    
    public function EditStok($id)
    {
        $where = array('kode_barang' => $id);
		//array grup dengan parameter data dan memanggil mahasiswal model dengan parameter getgrup
		$data['hasilgiling'] = $this->Hasilgiling_model->edit_data($where,'tb_hasil_giling')->result();
		$this->load->view('crud/Tambah_stok', $data);
            
        }

    public function ProsesTambah(){
    $kode_barang = $this->input->post('kode_barang');
    $data['v1']=(int)$this->input->post('stok',true);
    $data['v2']=(int)$this->input->post('stokk',true);
    $jumlah=$data['v1']+$data['v2'];
    $data1= array(
        'stok' => $jumlah
    );
    
        $this->Hasilgiling_model->tambahStok($kode_barang,$data1,'tb_hasil_giling');
        redirect('Hasilgiling');
    }

	public function hapus(){
		$kode_barang = $this->uri->segment(3);
		$this->Hasilgiling_model->hapus_data($kode_barang, 'tb_hasil_giling');
		redirect('Hasilgiling');
	}

}?>