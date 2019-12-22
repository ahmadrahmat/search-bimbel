<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enrollment extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['enrollment_m', 'student_m', 'subject_m']);
    }

	public function index()
	{
        $data['row'] = $this->enrollment_m->get();
		$this->template->load('template', 'enrollment/enrollment_data', $data);
	}
	
	public function add()
    {
        $enrollment = new stdClass();
        $enrollment->id = null;
        $enrollment->start_date = null;
        $enrollment->end_date = null;
		$enrollment->start_time = null;
		$enrollment->duration = null;
        $enrollment->num_of_meeting = null;
        $enrollment->phone = null;
		$enrollment->note = null;
		$enrollment->student_id = null;
		$enrollment->subject_id = null;
		$enrollment->status = null;

		$query_student = $this->student_m->get();
		$query_subject = $this->subject_m->get();

        $data = array(
            'page' => 'add',
			'row' => $enrollment,
			'student' => $query_student,
			'subject' => $query_subject
        );
        $this->template->load('template', 'enrollment/enrollment_form', $data);
    }

    public function edit($id)
    {
        $query = $this->enrollment_m->get($id);
        if($query->num_rows() > 0) {
			$enrollment = $query->row();
			$query_student = $this->student_m->get();
			$query_subject = $this->subject_m->get();

            $data = array(
                'page' => 'edit',
				'row' => $enrollment,
				'student' => $query_student,
				'subject' => $query_subject
            );
            $this->template->load('template', 'enrollment/enrollment_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('enrollment')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->enrollment_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->enrollment_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('enrollment');
    }

    public function delete($id)
    {
        $this->enrollment_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('enrollment')."';</script>";
    }
}
