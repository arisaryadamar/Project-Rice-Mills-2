<?php
class pmsk extends CI_Controller{

    function __construct(){ 
        /*Jika menggunakan construct di controller, parent::__constructor diperlukan 
        karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
        parent::__construct();
        //load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
        $this->load->model('Model_pemasokan');
    }

    public function index(){
        $data['pmsk'] = $this->Model_pemasokan->getAll()->result();
        $this->load->view('crud/Data_pemasokan',$data);
	}
	
	public function Api(){
		$data = $this->Model_pemasokan->getAll();
		echo json_encode($data->result_array());
	}

	public function chart(){
        $data['pmsk'] = $this->Model_pemasokan->getAll();
        $this->load->view('crud/grafikpasok_view',$data);
    }

    public function tambah(){
		$data['pmsk'] = $this->Model_pemasokan->getAll()->result();
		$this->load->view('crud/input_pemasokan', $data);
	}

    public function input(){
		$id = '1';
        $tgl = $this->input->post('tgl');
		$nama = $this->input->post('nama');
		$nmr = $this->input->post('nmr');
		$alamat = $this->input->post('alamat');
        $berat = $this->input->post('berat');
        $harga = $this->input->post('harga');

		$data = array(
			"id_stok" => $id,
            'tgl' => $tgl,
			'nama' => $nama,
			'nmr' => $nmr,
			'alamat' => $alamat,
            'berat' => $berat,
            'harga' => $harga
		);

		$this->Model_pemasokan->input_data($data,'tb_pemasokan');
			redirect('pmsk');
		
	}

	//membuat function edit dengan parameter id
	public function edit($id){
		//membuat array dengan parameter where
		$where = array('id_pemasokan' => $id);
		//array grup dengan parameter data dan memanggil mahasiswal model dengan parameter getgrup
		$data['pmsk'] = $this->Model_pemasokan->edit_data($where,'tb_pemasokan')->result();
		$this->load->view('crud/edit_pemasokan', $data);
	}

	//membuat function update
	public function update(){
		//membuat inputan pada update data
		$id_pemasokan = $this->input->post('id_pemasokan');
		$tgl = $this->input->post('tgl');
		$nama = $this->input->post('nama');
		$nmr = $this->input->post('nmr');
        $alamat = $this->input->post('alamat');
        $berat = $this->input->post('berat');
        $harga = $this->input->post('harga');

		$data = array(
			'id_pemasokan' => $id_pemasokan,
            'tgl' => $tgl,
			'nama' => $nama,
			'nmr' => $nmr,
			'alamat' => $alamat,
            'berat' => $berat,
            'harga' => $harga
		);

		

		$this->Model_pemasokan->update_data($id_pemasokan,$data,'tb_pemasokan');
			redirect('pmsk');
	}

	public function hapus(){
		$id_pemasokan = $this->uri->segment(3);
		$this->Model_pemasokan->hapus_data($id_pemasokan, 'tb_pemasokan');
		redirect('pmsk');
	}

}?>