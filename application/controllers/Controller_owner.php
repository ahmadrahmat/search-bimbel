<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_owner extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['model_owner', 'city_m', 'owner_m', 'enrollment_m', 'student_m', 'subject_m']);
    }

	public function index()
	{
        $data['row'] = $this->model_owner->get($id = null, $this->fungsi->user_login()->id);
		$this->template->load('template', 'custom_owner/organization_data', $data);
	}

    public function edit($id)
    {
        $query = $this->model_owner->get($id, $this->fungsi->user_login()->id);
        if($query->num_rows() > 0) {
			$organization = $query->row();
			$query_city = $this->city_m->get();
			$query_owner = $this->owner_m->get();

            $data = array(
                'page' => 'edit',
				'row' => $organization,
				'city' => $query_city,
				'owner' => $query_owner
            );
            $this->template->load('template', 'custom_owner/organization_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('controller_owner')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['edit'])) {
            $this->model_owner->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('controller_owner');
	}
	
	//
	public function subject_to_approve()
	{
        $data['row'] = $this->model_owner->getEnrollmentByStatus0AndOrganizationId($this->fungsi->user_login()->id);
		$this->template->load('template', 'custom_owner/subject_to_approve_data', $data);
	}

    public function subject_to_approve_edit($id)
    {
        $query = $this->enrollment_m->get($id);
        if($query->num_rows() > 0) {
			$enrollment = $query->row();
			$query_student = $this->student_m->get();
			$query_subject = $this->subject_m->getSubjectByOrganizationId($id = null, $this->fungsi->user_login()->id);

            $data = array(
                'title' => 'New Enrollment',
                'page' => 'edit',
				'row' => $enrollment,
				'student' => $query_student,
				'subject' => $query_subject
            );
            $this->template->load('template', 'custom_owner/subject_to_approve_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('new_enrollment')."';</script>";
        }
    }

    public function subject_to_approve_process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['edit'])) {
            $this->enrollment_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('new_enrollment');
	}

	public function subject_to_approve_delete($id)
    {
        $this->enrollment_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('new_enrollment')."';</script>";
	}
	
	public function approved($id)
	{
		$params = array(
			'status' => '1',
        );
        $this->db->where('id', $id);
		$this->db->update('enrollment', $params);
		if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('new_enrollment');
	}

	public function finish($id)
	{
		$params = array(
			'status' => '2',
        );
        $this->db->where('id', $id);
		$this->db->update('enrollment', $params);
		if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('ongoing_enrollment');
	}

	public function reject($id)
	{
		$params = array(
			'status' => '3',
        );
        $this->db->where('id', $id);
		$this->db->update('enrollment', $params);
		if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('new_enrollment');
	}
	
	//
	public function subject_ongoing()
	{
        $data['row'] = $this->model_owner->getEnrollmentByStatus1AndOrganizationId($this->fungsi->user_login()->id);
		$this->template->load('template', 'custom_owner/subject_ongoing_data', $data);
	}
	
	public function subject_ongoing_edit($id)
    {
        $query = $this->enrollment_m->get($id);
        if($query->num_rows() > 0) {
			$enrollment = $query->row();
			$query_student = $this->student_m->get();
			$query_subject = $this->subject_m->getSubjectByOrganizationId($id = null, $this->fungsi->user_login()->id);

            $data = array(
                'title' => 'Ongoing Enrollment',
                'page' => 'edit',
				'row' => $enrollment,
				'student' => $query_student,
				'subject' => $query_subject
            );
            $this->template->load('template', 'custom_owner/subject_to_approve_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('ongoing_enrollment')."';</script>";
        }
    }

	//
	public function history_subject()
	{
        $data['row'] = $this->model_owner->getEnrollmentByStatus23AndOrganizationId($this->fungsi->user_login()->id);
		$this->template->load('template', 'custom_owner/history_subject_data', $data);
	}

}
