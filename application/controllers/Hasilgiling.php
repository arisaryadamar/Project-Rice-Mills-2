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
		$data['hasilgiling'] = $this->Hasilgiling_model->getAll();
		$this->load->view('crud/Data_hasilgiling',$data);
	}
    public function add()
    {
        $hasilgiling = $this->Hasilgiling_model;
        $validation = $this->form_validation;
        $validation->set_rules($hasilgiling->rules());

        if ($validation->run()) {
            $hasilgiling->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Hasilgiling/index');
        }

        $this->load->view("crud/Tambah_hasilgiling");
    }
	public function edit($id = null)
    {
        if (!isset($id)) redirect('Hasilgiling/index');
       
        $hasilgiling = $this->Hasilgiling_model;
        $validation = $this->form_validation;
        $validation->set_rules($hasilgiling->rules());

        if ($validation->run()) {
            $hasilgiling->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Hasilgiling/');
        }

        $data["tb_hasil_giling"] = $hasilgiling->getById($id);
        if (!$data["tb_hasil_giling"]) show_404();
        $this->load->view("crud/edit_hasilgiling", $data);
        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Hasilgiling_model->delete($id)) {
            redirect(site_url('Hasilgiling/index'));
        }
    }
    public function EditStok($id = null)
    {
        if (!isset($id)) redirect('Hasilgiling/index');
       
        $hasilgiling = $this->Hasilgiling_model;
        $validation = $this->form_validation;
        $validation->set_rules($hasilgiling->rules());

        if ($validation->run()) {
            $hasilgiling->tambahStok();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Hasilgiling/');
        }

        $data["tb_hasil_giling"] = $hasilgiling->getById($id);
        if (!$data["tb_hasil_giling"]) show_404();
        $this->load->view("crud/Tambah_stok", $data);
        
    }
}

?>