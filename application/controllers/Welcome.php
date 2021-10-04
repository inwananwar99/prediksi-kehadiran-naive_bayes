<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('login');
	}
	public function data(){
    $data['hadir'] = $this->M_Klasifikasi->indexes();
    $this->load->view('index', $data);
  }

	public function do_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$cek = $this->M_Klasifikasi->getData('user',['username'=>$username])->row_array();
		if($cek){
			if($cek['password'] == $password){
				$data = [
					'admin' => $cek['username']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Datang Admin!</div>');
        		redirect('Welcome/dashboard');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak tepat!</div>');
        		redirect('Welcome');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User belum terdaftar!</div>');
        	redirect('Welcome');
		}
	}

	public function dashboard(){
		$data['judul'] = 'Dashboard Admin';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	public function logout()
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda telah berhasil logout!</div>');
        $this->session->unset_userdata('admin');
        redirect('Welcome');
    }

}
