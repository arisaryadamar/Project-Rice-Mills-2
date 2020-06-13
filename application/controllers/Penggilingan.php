<?php
class Penggilingan extends CI_Controller{
	//fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	function __construct(){ 
		/*Jika menggunakan construct di controller, parent::__constructor diperlukan 
		karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
		parent::__construct();
		//load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
		$this->load->model('Penggilingan_model');
		$this->load->library('form_validation');
	}
	public function index(){
		$data['penggilingan'] = $this->Penggilingan_model->getAll();
		$this->load->view('crud/Data_penggilingan',$data);
	}
    public function add()
    {
        $penggilingan = $this->Penggilingan_model;
        $validation = $this->form_validation;
        $validation->set_rules($penggilingan->rules());

        if ($validation->run()) {
            $penggilingan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Penggilingan/index');
        }

        $this->load->view("crud/input_penggilingan");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('Penggilingan/index');
       
        $penggilingan = $this->Penggilingan_model;
        $validation = $this->form_validation;
        $validation->set_rules($penggilingan->rules());

        if ($validation->run()) {
            $penggilingan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Penggilingan/');
        }

        $data["tb_penggilingan"] = $penggilingan->getById($id);
        if (!$data["tb_penggilingan"]) show_404();
        $this->load->view("crud/edit_penggilingan", $data);
        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Penggilingan_model->delete($id)) {
            redirect(site_url('Penggilingan/index'));
        }
    }
}
?>