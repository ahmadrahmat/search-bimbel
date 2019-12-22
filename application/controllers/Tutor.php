<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['tutor_m', 'bimbel_user_m']);
    }

	public function index()
	{
        $data['row'] = $this->tutor_m->get();
		$this->template->load('template', 'tutor/tutor_data', $data);
	}
	
	public function add()
    {
        $tutor = new stdClass();
		$tutor->id = null;
		$tutor->bimbel_user_id = null;

		$query_bimbel_user = $this->bimbel_user_m->get();

        $data = array(
            'page' => 'add',
			'row' => $tutor,
			'bimbel_user' => $query_bimbel_user
        );
        $this->template->load('template', 'tutor/tutor_form', $data);
    }

    public function edit($id)
    {
        $query = $this->tutor_m->get($id);
        if($query->num_rows() > 0) {
			$tutor = $query->row();
			$query_bimbel_user = $this->bimbel_user_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $tutor,
				'bimbel_user' => $query_bimbel_user
            );
            $this->template->load('template', 'tutor/tutor_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('tutor')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->tutor_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->tutor_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('tutor');
    }

    public function delete($id)
    {
        $this->tutor_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('tutor')."';</script>";
    }
}
