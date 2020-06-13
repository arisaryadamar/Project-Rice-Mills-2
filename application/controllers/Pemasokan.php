<?php
class Pemasokan extends CI_Controller{
    //fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
    function __construct(){ 
        /*Jika menggunakan construct di controller, parent::__constructor diperlukan 
        karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
        parent::__construct();
        //load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
        $this->load->model('Pemasokan_model');
        $this->load->library('form_validation');
    }
    public function index(){
        $data['pemasokan'] = $this->Pemasokan_model->getAll();
        $this->load->view('crud/Data_pemasokan',$data);
    }
    public function chart(){
        $data['pemasokan'] = $this->Pemasokan_model->getAll();
        $this->load->view('crud/grafikpasok_view',$data);
    }
    public function add()
    {
        $pemasokan = $this->Pemasokan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pemasokan->rules());

        if ($validation->run()) {
            $pemasokan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Pemasokan/');
        }

        $this->load->view("crud/input_pemasokan");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('Pemasokan/index');
       
        $pemasokan = $this->Pemasokan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pemasokan->rules());

        if ($validation->run()) {
            $pemasokan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Pemasokan/');
        }

        $data["tb_pemasokan"] = $pemasokan->getById($id);
        if (!$data["tb_pemasokan"]) show_404();
        // redirect('Pemasokan');
        $this->load->view("crud/edit_pemasokan", $data);
        
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Pemasokan_model->delete($id)) {
            redirect(site_url('Pemasokan/index'));
        }
    }
}
?>