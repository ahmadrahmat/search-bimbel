<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbel_user extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        /* check_admin(); */
        $this->load->model(['bimbel_user_m', 'city_m', 'bimbel_user_type_m']);
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->bimbel_user_m->get();
		$this->template->load('template', 'bimbel_user/bimbel_user_data', $data);
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

    public function edit($id)
    {
        $query = $this->bimbel_user_m->get($id);
        if($query->num_rows() > 0) {
			$bimbel_user = $query->row();
			$query_city = $this->city_m->get();
			$query_bimbel_user_type = $this->bimbel_user_type_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $bimbel_user,
				'city' => $query_city,
				'bimbel_user_type' => $query_bimbel_user_type
            );
            $this->template->load('template', 'bimbel_user/bimbel_user_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('bimbel_user')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->bimbel_user_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->bimbel_user_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('bimbel_user');
    }

    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM bimbel_user WHERE username = '$post[username]' AND id != '$post[id]'");
        if($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function delete($id)
    {
        $this->bimbel_user_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('bimbel_user')."';</script>";
	}
	
	public function account()
	{
        $data['row'] = $this->bimbel_user_m->get($this->fungsi->user_login()->id);
		$this->template->load('template', 'bimbel_user/account_data', $data);
	}

	//public function account_edit_ts($id)
	public function account_edit_ts()
    {
        //$ms = str_replace(array('-','_','~'), array('=','+','/'), $id.'');
        // print_r($ms);
        // $msg = $id; //Plain text 
        // print_r($msg);
        //$key = 'recodeku.blospot.com123456789123'; //Key 32 character 
        // //default menggunakan MCRYPT_RIJNDAEL_256 
        //$hasil_dekripsi = $this->encryption->decrypt($ms); 
        // print_r($hasil_dekripsi);
        $id = $this->fungsi->user_login()->id;
        $query = $this->bimbel_user_m->get($id);
        if($query->num_rows() > 0) {
			$bimbel_user = $query->row();
			$query_city = $this->city_m->get();
			$query_bimbel_user_type = $this->bimbel_user_type_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $bimbel_user,
				'city' => $query_city,
				'bimbel_user_type' => $query_bimbel_user_type
            );
            $this->template->load('frontend/template', 'frontend/user-profile', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('home')."';</script>";
        }
    }
    
    public function account_edit($id)
    {
        $query = $this->bimbel_user_m->get($id);
        if($query->num_rows() > 0) {
			$bimbel_user = $query->row();
			$query_city = $this->city_m->get();
			$query_bimbel_user_type = $this->bimbel_user_type_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $bimbel_user,
				'city' => $query_city,
				'bimbel_user_type' => $query_bimbel_user_type
            );
            $this->template->load('template', 'bimbel_user/account_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('akun')."';</script>";
        }
	}
	
    public function account_process_ts()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['edit'])) {
            $this->bimbel_user_m->edit($post);
            $id = $this->input->post('id', TRUE);
            //print_r($post);
        } 

        if($this->db->affected_rows() >0 ) {
            //$this->session->set_flashdata('success', 'Data berhasil disimpan');
            echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('akun/editts')."'
				</script>";
        }
        //redirect('akun');
    }

    public function account_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['edit'])) {
            $this->bimbel_user_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('akun');
    }

}
