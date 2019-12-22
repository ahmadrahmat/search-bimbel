<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbel_user_type extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('bimbel_user_type_m');
    }

	public function index()
	{
        $data['row'] = $this->bimbel_user_type_m->get();
		$this->template->load('template', 'bimbel_user_type/bimbel_user_type_data', $data);
	}
	
	public function add()
    {
        $bimbel_user_type = new stdClass();
        $bimbel_user_type->id = null;
		$bimbel_user_type->name = null;
        $data = array(
            'page' => 'add',
            'row' => $bimbel_user_type
        );
        $this->template->load('template', 'bimbel_user_type/bimbel_user_type_form', $data);
    }

    public function edit($id)
    {
        $query = $this->bimbel_user_type_m->get($id);
        if($query->num_rows() > 0) {
            $bimbel_user_type = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $bimbel_user_type
            );
            $this->template->load('template', 'bimbel_user_type/bimbel_user_type_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('bimbel_user_type')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->bimbel_user_type_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->bimbel_user_type_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('bimbel_user_type');
    }

    public function delete($id)
    {
        $this->bimbel_user_type_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('bimbel_user_type')."';</script>";
    }
}
