<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('job_m');
    }

	public function index()
	{
        $data['row'] = $this->job_m->get();
		$this->template->load('template', 'job/job_data', $data);
	}
	
	public function add()
    {
        $job = new stdClass();
        $job->id = null;
		$job->name = null;
		$job->age = null;
		$job->other_note = null;
        $data = array(
            'page' => 'add',
            'row' => $job
        );
        $this->template->load('template', 'job/job_form', $data);
    }

    public function edit($id)
    {
        $query = $this->job_m->get($id);
        if($query->num_rows() > 0) {
            $job = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $job
            );
            $this->template->load('template', 'job/job_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('job')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->job_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->job_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('job');
    }

    public function delete($id)
    {
        $this->job_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('job')."';</script>";
    }
}
