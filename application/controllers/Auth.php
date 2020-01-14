<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        //check_not_login();
        /* check_admin(); */
        $this->load->model(['bimbel_user_m', 'city_m', 'bimbel_user_type_m']);
        $this->load->library('form_validation');
    }
	
	public function login()
	{
		check_already_login();
		//$this->load->view('login');
		$this->template->load('frontend/template', 'frontend/login');
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
					'log' => '1',
				);
				$this->session->set_userdata($params);
				if (($row->bimbel_user_type_id == 1) OR ($row->bimbel_user_type_id == 2)) {
					echo "<script>
						window.location='".site_url('dashboard')."'
						</script>";
				} elseif (($row->bimbel_user_type_id == 3) OR ($row->bimbel_user_type_id == 4)) {
					echo "<script>
						window.location='".site_url('home')."'
						</script>";
				}
				
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
		$params = array('id', 'bimbel_user_type_id', 'log');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}

	public function register()
	{
		check_already_login();

		$query_city = $this->city_m->get();
		$query_bimbel_user_type = $this->bimbel_user_type_m->getRegist();

        $data = array(
            'page' => 'add',
			'city' => $query_city,
			'bimbel_user_type' => $query_bimbel_user_type
        );

		//$this->load->view('login');
		$this->template->load('frontend/template', 'frontend/register', $data);
	}

	public function add()
    {
        $bimbel_user = new stdClass();
        $bimbel_user->id = null;
		$bimbel_user->username = null;
		$bimbel_user->name = null;
		$bimbel_user->password = null;
        $bimbel_user->email = null;
		$bimbel_user->phone = null;
		$bimbel_user->address = null;
		$bimbel_user->city_id = null;
		$bimbel_user->bimbel_user_type_id = null;

		$query_city = $this->city_m->get();
		$query_bimbel_user_type = $this->bimbel_user_type_m->get();

        $data = array(
            'page' => 'add',
			'row' => $bimbel_user,
			'city' => $query_city,
			'bimbel_user_type' => $query_bimbel_user_type
        );
        $this->template->load('template', 'bimbel_user/bimbel_user_form', $data);
	}
	
	public function signup()
    {
        //$post = $this->input->post(null, TRUE);
<<<<<<< HEAD
        // if(isset($_POST['add'])) {
			$username 	= $this->input->post('username', true);
			$email 		= $this->input->post('email', true);
			$cek 		= $this->bimbel_user_m->cekUsername($username);
			$cekEmail 	= $this->bimbel_user_m->cekEmail($email);
			if (count($cek) == 1) {
				$this->session->set_flashdata('username', 'Registration failure. Username already exists!');
				// $this->session->set_flashdata('username', 'Username already exists!');
				redirect('auth/register');
			} elseif (count($cekEmail) == 1) {
				$this->session->set_flashdata('email', 'Registration failure. Email already exists!');
					// $this->session->set_flashdata('email', 'Email already exists!');
				redirect('auth/register');
			} else {
					$post = array(
						'name'                => $this->input->post('name', true),
						'username'            => $this->input->post('username', true),
						'password'            => $this->input->post('password', true),
						'email'               => $this->input->post('email', true),
						'phone'               => $this->input->post('phone', true),
						'address'             => $this->input->post('address', true),
						'city_id'             => $this->input->post('city_id', true),
						'bimbel_user_type_id' => $this->input->post('bimbel_user_type_id', true)
					);
					$this->bimbel_user_m->add($post);
					// print_r($post);
					if($this->db->affected_rows() >0 ) {
						$this->session->set_flashdata('success', 'Registration successful. Please login using your username and password!');
					}
					redirect('auth/login');
				
				
			}
			

		// } 
=======
        if(isset($_POST['add'])) {
			$post = array(
				'name'                => $this->input->post('name', true),
				'username'            => $this->input->post('username', true),
				'password'            => $this->input->post('password', true),
				'email'               => $this->input->post('email', true),
				'phone'               => $this->input->post('phone', true),
				'address'             => $this->input->post('address', true),
				'city_id'             => $this->input->post('city_id', true),
				'bimbel_user_type_id' => $this->input->post('bimbel_user_type_id', true)
			);
			$this->bimbel_user_m->add($post);
			//print_r($post);
			if($this->db->affected_rows() >0 ) {
				$this->session->set_flashdata('success', 'Registration successful. Please login using your username and password!');
			}
			redirect('auth/login');
		} 
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7

        
    }
}
