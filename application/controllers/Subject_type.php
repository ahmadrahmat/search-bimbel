<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_type extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('subject_type_m');
    }

	public function index()
	{
        $data['row'] = $this->subject_type_m->get();
		$this->template->load('template', 'subject_type/subject_type_data', $data);
	}
	
	public function add()
    {
        $subject_type = new stdClass();
        $subject_type->id = null;
		$subject_type->name = null;
        $data = array(
            'page' => 'add',
            'row' => $subject_type
        );
        $this->template->load('template', 'subject_type/subject_type_form', $data);
    }

    public function edit($id)
    {
        $query = $this->subject_type_m->get($id);
        if($query->num_rows() > 0) {
            $subject_type = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $subject_type
            );
            $this->template->load('template', 'subject_type/subject_type_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('subject_type')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->subject_type_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->subject_type_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('subject_type');
    }

    public function delete($id)
    {
        $this->subject_type_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('subject_type')."';</script>";
    }
}
