<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_siswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['model_siswa', 'organization_m', 'enrollment_m', 'review_m']);
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
        //$post = $this->input->post(null, TRUE);
        //if(isset($_POST['add'])) {
        //    $this->enrollment_m->add($post);
        //} 

        //if($this->db->affected_rows() >0 ) {
        //    $this->session->set_flashdata('success', 'Data berhasil disimpan');
        //}
		//redirect('controller_siswa/semua_bimbel_detail/'.$id);
		
		if(isset($_POST['add'])) {
			$post = array(
				'start_date'     => $this->input->post('start_date', true),
				'end_date'       => $this->input->post('end_date', true),
				'start_time'     => $this->input->post('start_time', true),
				'duration'       => $this->input->post('duration', true),
				'num_of_meeting' => $this->input->post('num_of_meeting', true),
				'phone'          => $this->input->post('phone', true),
				'note'           => $this->input->post('note', true),
				'student_id'     => $this->input->post('student_id', true),
				'subject_id'     => $this->input->post('subject_id', true)
			);
			$this->enrollment_m->add($post);
			//print_r($post);
			if($this->db->affected_rows() >0 ) {
			//	$this->session->set_flashdata('success', 'Registration successful. Please login using your username and password!');
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('bimbel_yang_di_ikuti')."'
				</script>";
			}
			//redirect('auth/login');
		} 
	}

	public function rating()
    {
        if(isset($_POST['Rating'])) {
			$post = array(
				'id_student'      => $this->input->post('id_student', true),
				'id_organization' => $this->input->post('id_organization', true),
				'id_subject'      => $this->input->post('id_subject', true),
				'content'         => $this->input->post('content', true),
				'rating'          => $this->input->post('rating', true)
			);
			$this->review_m->add($post);
			//print_r($post);
			if($this->db->affected_rows() >0 ) {
			//	$this->session->set_flashdata('success', 'Registration successful. Please login using your username and password!');
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('bimbel_yang_di_ikuti')."'
				</script>";
			}
			//redirect('auth/login');
		} elseif(isset($_POST['Edit'])) {
			$post = array(
				'id_review'       => $this->input->post('id_review', true),
				'id_student'      => $this->input->post('id_student', true),
				'id_organization' => $this->input->post('id_organization', true),
				'id_subject'      => $this->input->post('id_subject', true),
				'content'         => $this->input->post('content', true),
				'rating'          => $this->input->post('rating', true)
			);
			$this->review_m->edit($post);
			//print_r($post);
			if($this->db->affected_rows() >0 ) {
			//	$this->session->set_flashdata('success', 'Registration successful. Please login using your username and password!');
				echo "<script>
				alert('Data berhasil disimpan');
				window.location='".site_url('bimbel_yang_di_ikuti')."'
				</script>";
			}
			//redirect('auth/login');
		} 
	}
	
	public function bimbel_yang_di_ikuti()
	{
		$data['row'] = $this->model_siswa->getEnrollmentByIdStudent($this->fungsi->user_login()->id);
		$this->template->load('frontend/template', 'frontend/my-bimbel', $data);
	}

}
