<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_application extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['job_application_m', 'model_owner']);
    }

	public function index()
	{
        $data['row'] = $this->job_application_m->getJobAppByOrganizationId($this->fungsi->user_login()->id);
		$this->template->load('template', 'job_application/job_application_data', $data);
	}
	
	public function add()
    {
        $job_application = new stdClass();
        $job_application->id = null;
        $job_application->approved = null;
		$job_application->organization_id = null;
		$job_application->tutor_id = null;

		$query_organization = $this->model_owner->get($id = null, $this->fungsi->user_login()->id);
		$query_tutor = $this->job_application_m->getJobAppByOrganizationId($this->fungsi->user_login()->id);

        $data = array(
            'page' => 'add',
			'row' => $job_application,
			'organization' => $query_organization,
			'tutor' => $query_tutor
        );
        $this->template->load('template', 'job_application/job_application_form', $data);
    }

    public function edit($id)
    {
        $query = $this->job_application_m->get($id);
        if($query->num_rows() > 0) {
			$job_application = $query->row();
			$query_organization = $this->model_owner->get($id = null, $this->fungsi->user_login()->id);
			$query_tutor = $this->job_application_m->getJobAppByOrganizationId($this->fungsi->user_login()->id);

            $data = array(
                'page' => 'edit',
				'row' => $job_application,
				'organization' => $query_organization,
				'tutor' => $query_tutor
            );
            $this->template->load('template', 'job_application/job_application_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('job_application')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->job_application_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->job_application_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('job_application');
    }

	public function approved($id)
	{
		$params = array(
			'approved' => '1',
        );
        $this->db->where('id', $id);
		$this->db->update('job_application', $params);
		if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('job_application');
	}

	public function inactive($id, $tutor_id)
	{
		$bimbel_user_id = $this->fungsi->user_login()->id;
		$this->db->select('organization.id as organization_id');
		$this->db->from('organization');
		$this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		$this->db->where('owner.bimbel_user_id', $bimbel_user_id);
		$organization_id = $this->db->get()->row()->organization_id;

		$params = array(
			'approved' => '2',
        );
        $this->db->where('id', $id);
		$this->db->update('job_application', $params);
		
		$this->db->select('*');
		$this->db->from('subject_tutor');
		$this->db->join('subject', 'subject.id = subject_tutor.subject_id');
		$this->db->where('subject_tutor.tutor_id', $tutor_id);
		$this->db->where('subject.organization_id', $organization_id);
		$cek = $this->db->get();
		
		if($cek->num_rows() > 0) {
			$this->db->query("DELETE subject_tutor.* FROM subject_tutor, subject WHERE subject.id = subject_tutor.subject_id AND subject_tutor.tutor_id = $tutor_id AND subject.organization_id = $organization_id");

		}
		if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('job_application');
	}

	public function rejected($id)
	{
		$params = array(
			'approved' => '3',
        );
        $this->db->where('id', $id);
		$this->db->update('job_application', $params);
		if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('job_application');
	}

    public function delete($id)
    {
        $this->job_application_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('bimbel_yang_sedang_terdaftar')."';</script>";
    }
}
