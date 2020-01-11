<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['subject_m', 'subject_type_m', 'model_owner', 'job_application_m']);
    }

	public function index()
	{
        $data['row'] = $this->subject_m->getSubjectByOrganizationId($id = null, $this->fungsi->user_login()->id);
		$this->template->load('template', 'subject/subject_data', $data);
	}
	
	public function add()
    {
        $subject = new stdClass();
        $subject->id = null;
        $subject->name = null;
        $subject->description = null;
		$subject->subject_type_id = null;
		$subject->organization_id = null;
		$subject->tutor_id = null;

		$query_subject_type = $this->subject_type_m->get();
		$query_organization = $this->model_owner->get($id = null, $this->fungsi->user_login()->id);
		$query_job_application = $this->job_application_m->getJobAppByOrganizationId($this->fungsi->user_login()->id);

        $data = array(
            'page' => 'add',
			'row' => $subject,
			'subject_type' => $query_subject_type,
			'organization' => $query_organization,
			'job_application' => $query_job_application
        );
        $this->template->load('template', 'subject/subject_form', $data);
    }

    public function edit($id)
    {
        $query = $this->subject_m->getSubjectByOrganizationId($id, $this->fungsi->user_login()->id);
        if($query->num_rows() > 0) {
			$subject = $query->row();
			$query_subject_type = $this->subject_type_m->get();
			$query_organization = $this->model_owner->get($id = null, $this->fungsi->user_login()->id);
			$query_subject_tutor = $this->model_owner->getTutorBySubjectId($this->uri->segment(3));
			$query_job_application = $this->job_application_m->getJobAppByOrganizationIdAndApproved($this->fungsi->user_login()->id);

            $data = array(
                'page' => 'edit',
				'row' => $subject,
				'subject_type' => $query_subject_type,
				'organization' => $query_organization,
				'subject_tutor' => $query_subject_tutor,
				'job_application' => $query_job_application
            );
            $this->template->load('template', 'subject/subject_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('subject')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->subject_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->subject_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('subject');
    }

    public function delete($id)
    {
        $this->subject_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('subject')."';</script>";
    }
}
