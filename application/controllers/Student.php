<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['student_m', 'bimbel_user_m']);
    }

	public function index()
	{
        $data['row'] = $this->student_m->get();
		$this->template->load('template', 'student/student_data', $data);
	}
	
	public function add()
    {
        $student = new stdClass();
		$student->id = null;
		$student->bimbel_user_id = null;

		$query_bimbel_user = $this->bimbel_user_m->get();

        $data = array(
            'page' => 'add',
			'row' => $student,
			'bimbel_user' => $query_bimbel_user
        );
        $this->template->load('template', 'student/student_form', $data);
    }

    public function edit($id)
    {
        $query = $this->student_m->get($id);
        if($query->num_rows() > 0) {
			$student = $query->row();
			$query_bimbel_user = $this->bimbel_user_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $student,
				'bimbel_user' => $query_bimbel_user
            );
            $this->template->load('template', 'student/student_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('student')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->student_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->student_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('student');
    }

    public function delete($id)
    {
        $this->student_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('student')."';</script>";
    }
}
