<?php
class Login extends CI_Controller{
	//fungsi di dalam class yang di eksekusi pertama kali saat class itu dipanggil
	function __construct(){ 
		/*Jika menggunakan construct di controller, parent::__constructor diperlukan 
		karena konstruktor lokal Anda akan menimpa yang ada di kelas induk kontrol sehingga kami perlu menyebutnya secara manual*/
		parent::__construct();
		//load file mahasiswa_model di construct agar seluruh function di dalam controller dapat mengakses model yang di load
		$this->load->model('Login_model');
	}
	public function index(){
		$this->load->view('crud/login');
	}
	public function cek_log(){
		$username = $this->input->post('txt_user');
		$password = $this->input->post('txt_pass');
		$cek = $this->Mahasiswa_model->login($username,$password,'tm_user')->result();
		if($cek != FALSE){
			foreach ($cek as $row) {
				$user = $row->username;
				$grup = $row->grup;
			}
			$this->session->set_userdata('session_user', $user);
			$this->session->set_userdata('session_grup', $grup);
			redirect('Ricemills');
		}else{
			$this->load->view('crud/login');
		}
	}
	public function logout(){
		//untuk menghapus semua session
		$this->session->sess_destroy();
		redirect('Login');
	}
	public function lupaPassword(){
		$this->load->view('crud/Lupa_password');
	}
}
?>