<?php
class Penggilingan extends CI_Controller{
<<<<<<< HEAD
	//fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	function __construct(){ 
		/*Jika menggunakan construct di controller, parent::__constructor diperlukan 
		karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
		parent::__construct();
		//load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
		$this->load->model('Penggilingan_model');
	}
    public function index(){
        $data['penggilingan'] = $this->Penggilingan_model->getAll()->result();
        $this->load->view('crud/Data_penggilingan',$data);
	}
	
	public function Api(){
		$data = $this->Penggilingan_model->getAll();
		echo json_encode($data->result_array());
	}

    public function tambah(){
		$data['penggilingan'] = $this->Penggilingan_model->getAll()->result();
		$this->load->view('crud/input_penggilingan', $data);
	}

    public function input(){
		$id = '1';
        $Tanggal = $this->input->post('Tanggal');
		$Berat = $this->input->post('Berat');
		$Biaya_Penggilingan = $this->input->post('Biaya_Penggilingan');

		$data = array(
			"id_stok" => $id,
            'Tanggal' => $Tanggal,
			'Berat' => $Berat,
			'Biaya_Penggilingan' => $Biaya_Penggilingan
		);

		$this->Penggilingan_model->input_data($data,'tb_penggilingan');
			redirect('Penggilingan');
		
	}

	//membuat function edit dengan parameter id
	public function edit($id){
		//membuat array dengan parameter where
		$where = array('id_penggilingan' => $id);
		//array grup dengan parameter data dan memanggil mahasiswal model dengan parameter getgrup
		$data['penggilingan'] = $this->Penggilingan_model->edit_data($where,'tb_penggilingan')->result();
		$this->load->view('crud/edit_penggilingan', $data);
	}

	//membuat function update
	public function update(){
		//membuat inputan pada update data
		$id_penggilingan = $this->input->post('id_penggilingan');
        $Tanggal = $this->input->post('Tanggal');
		$Berat = $this->input->post('Berat');
		$Biaya_Penggilingan = $this->input->post('Biaya_Penggilingan');

		$data = array(
			"id_penggilingan" => $id_penggilingan,
            'Tanggal' => $Tanggal,
			'Berat' => $Berat,
			'Biaya_Penggilingan' => $Biaya_Penggilingan
		);

		$this->Penggilingan_model->update_data($id_penggilingan, $data,'tb_penggilingan');
			redirect('Penggilingan');
		
	}

	public function hapus(){
		$id_penggilingan = $this->uri->segment(3);
		$this->Penggilingan_model->hapus_data($id_penggilingan, 'tb_penggilingan');
		redirect('Penggilingan');
	}
=======

    function __construct(){ 
        /*Jika menggunakan construct di controller, parent::__constructor diperlukan 
        karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
        parent::__construct();
        //load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
        $this->load->model('Penggilingan_model');
    }

    public function index(){
        $data['penggilingan'] = $this->Penggilingan_model->getAll()->result();
        $this->load->view('crud/Data_Penggilingan',$data);
    }
    
    public function Api(){
        $data = $this->Penggilingan_model->getAll();
        echo json_encode($data->result_array());
    }

    public function tambah(){
        $data['penggilingan'] = $this->Penggilingan_model->getAll()->result();
        $this->load->view('crud/input_penggilingan', $data);
    }

    public function input(){
        $id = '1';
        $Tanggal = $this->input->post('Tanggal');
        $Berat = $this->input->post('Berat');
        $Biaya_Penggilingan = $this->input->post('Biaya_Penggilingan');

        $data = array(
            "id_stok" => $id,
            'Tanggal' => $Tanggal,
            'Berat' => $Berat,
            'Biaya_Penggilingan' => $Biaya_Penggilingan
        );

        $this->Penggilingan_model->input_data($data,'tb_penggilingan');
            redirect('Penggilingan/index');
        
    }

    //membuat function edit dengan parameter id
    public function edit($id){
        //membuat array dengan parameter where
        $where = array('id_penggilingan' => $id);
        //array grup dengan parameter data dan memanggil mahasiswal model dengan parameter getgrup
        $data['penggilingan'] = $this->Penggilingan_model->edit_data($where,'tb_penggilingan')->result();
        $this->load->view('crud/edit_penggilingan', $data);
    }

    //membuat function update
    public function update(){
        //membuat inputan pada update data
        $id_penggilingan = $this->input->post('id_penggilingan');
        $Tanggal = $this->input->post('Tanggal');
        $Berat = $this->input->post('Berat');
        $Biaya_Penggilingan = $this->input->post('Biaya_Penggilingan');

        $data = array(
            'id_penggilingan' => $id_penggilingan,
            'Tanggal' => $Tanggal,
            'Berat' => $Berat,
            'Biaya_Penggilingan' => $Biaya_Penggilingan
        );

        $this->Penggilingan_model->update_data($id_penggilingan,$data,'tb_penggilingan');
        redirect('Penggilingan/index');
    }

    public function hapus(){
        $id_penggilingan = $this->uri->segment(3);
        $this->Penggilingan_model->hapus_data($id_penggilingan, 'tb_penggilingan');
        redirect('Penggilingan/index');
    }
>>>>>>> 113c9a1a9a517665fab9c43a903a8d5b72fac137

}?>