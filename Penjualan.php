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
		$data['penjualan'] = $this->Penjualan_model->getAll();
		$this->load->view('crud/Data_penjualan',$data);
	}
	public function chart(){
		$data['penjualan'] = $this->Penjualan_model->getAll();
		$this->load->view('crud/grafikjual_view',$data);
	}
	public function add()
    {
        $penjualan = $this->Penjualan_model;
        $validation = $this->form_validation;
        $validation->set_rules($penjualan->rules());

        if ($validation->run()) {
            $penjuala->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Penjualan/index');
		}
		
		$data['kode'] = $this->Penjualan_model->get_kode()->result();
		$this->load->view("crud/input_penjualan",$data);
	}
	function input(){
        $penjualan=array(
            'tanggal'           =>$this->input->post('tanggal'),
			'kode_barang'          => $this->input->post('kode_barang'),
			'Jumlah'          => $this->input->post('Jumlah'),
			'Harga'          => $this->input->post('Harga'),
            'Total_harga'        => $this->input->post('Total_harga')
            );
        $this->model_mahasiswa->input($penjualan);
        $this->add();
    }
}
?>