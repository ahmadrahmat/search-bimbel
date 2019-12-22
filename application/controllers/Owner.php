<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['owner_m', 'bimbel_user_m']);
    }

	public function index()
	{
        $data['row'] = $this->owner_m->get();
		$this->template->load('template', 'owner/owner_data', $data);
	}
	
	public function add()
    {
        $owner = new stdClass();
		$owner->id = null;
		$owner->bimbel_user_id = null;

		$query_bimbel_user = $this->bimbel_user_m->get();

        $data = array(
            'page' => 'add',
			'row' => $owner,
			'bimbel_user' => $query_bimbel_user
        );
        $this->template->load('template', 'owner/owner_form', $data);
    }

    public function edit($id)
    {
        $query = $this->owner_m->get($id);
        if($query->num_rows() > 0) {
			$owner = $query->row();
			$query_bimbel_user = $this->bimbel_user_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $owner,
				'bimbel_user' => $query_bimbel_user
            );
            $this->template->load('template', 'owner/owner_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('owner')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->owner_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->owner_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('owner');
    }

    public function delete($id)
    {
        $this->owner_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('owner')."';</script>";
    }
}
