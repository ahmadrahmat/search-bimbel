<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_tutor extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['model_tutor', 'organization_m', 'job_application_m']);
    }

	//custom function tutor

	public function semua_organisasi()
	{
		$data['row'] = $this->model_tutor->getOrganizationWhereActivated();
		$this->template->load('template', 'custom_tutor/semua_organisasi_data', $data);
	}

	public function semua_organisasi_detail($id)
	{
		$query_tutor = $this->model_tutor->getTutorIdByBimbelUserId($this->fungsi->user_login()->id);
		$query_subject = $this->model_tutor->getSubjectByOrganizationId($id);

		$data = array(
            'page' => 'add',
			'row' => $this->model_tutor->getSubjectByOrganizationId($id),
			'tutor' => $query_tutor,
			'subject' => $query_subject,
			'organization_id' => $id
        );
		$this->template->load('template', 'custom_tutor/semua_organisasi_detail', $data);
	}

	public function process_daftar_organisasi($organization_id, $tutor_id)
    {
        $this->model_tutor->add($organization_id, $tutor_id);

        if($this->db->affected_rows() >0 ) {
            //$this->session->set_flashdata('success', 'Data berhasil disimpan');
            echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('bimbel_yang_sedang_terdaftar')."'
				</script>";
        }
        //redirect('home/detail_bimbel/'.$organization_id);
	}
	
	public function bimbel_yang_sedang_terdaftar()
	{
		$data['row'] = $this->model_tutor->getJobApplicationByIdTutor($this->fungsi->user_login()->id);
		$this->template->load('frontend/template', 'frontend/my-bimbel-tutor', $data);
	}

	public function bimbel_yang_sedang_diajar()
	{
		$data['row'] = $this->model_tutor->getSubjectByIdTutor($this->fungsi->user_login()->id);
		$this->template->load('frontend/template', 'frontend/my-subject-tutor', $data);
	}
}
