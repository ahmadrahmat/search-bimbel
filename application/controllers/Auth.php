<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
		//$this->template->load('template', 'dashboard');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['login'])) {
			$this->load->model('bimbel_user_m');
			$query = $this->bimbel_user_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id' => $row->id,
					'bimbel_user_type_id' => $row->bimbel_user_type_id,
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('dashboard')."'
					</script>";
			} else {
				echo "<script>
					alert('Login gagal, username / password salah');
					window.location='".site_url('auth/login')."'
					</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id', 'bimbel_user_type_id');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
