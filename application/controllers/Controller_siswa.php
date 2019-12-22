<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_siswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['model_siswa', 'organization_m', 'enrollment_m']);
    }

	//custom function siswa
	public function semua_bimbel()
	{
		$data['row'] = $this->model_siswa->getOrganizationWhereActivated();
		$this->template->load('template', 'custom_siswa/semua_bimbel_data', $data);
	}

	public function semua_bimbel_detail($id)
	{
		$query_student = $this->model_siswa->getStudentIdByBimbelUserId($this->fungsi->user_login()->id);
		$query_subject = $this->model_siswa->getSubjectByOrganizationId($id);

		$data = array(
            'page' => 'add',
			'row' => $this->model_siswa->getSubjectByOrganizationId($id),
			'student' => $query_student,
			'subject' => $query_subject,
			'organization_id' => $id
        );
		$this->template->load('template', 'custom_siswa/semua_bimbel_detail', $data);
	}

	public function process_daftar_bimbel($id)
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->enrollment_m->add($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('controller_siswa/semua_bimbel_detail/'.$id);
	}
	
	public function bimbel_yang_di_ikuti()
	{
		$data['row'] = $this->model_siswa->getEnrollmentByIdStudent($this->fungsi->user_login()->id);
		$this->template->load('template', 'custom_siswa/bimbel_yang_di_ikuti', $data);
	}

}
