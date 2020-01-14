<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tutor extends CI_Model {

	//custom function model tutor

	// public function add($id, $tutor_id)
    // {
    //     $params = array(
	// 		'organization_id' => $id,
	// 		'tutor_id' => $tutor_id
    //     );
    //     $this->db->insert('job_application', $params);
	// }

	public function add($post)
    {
        $params = array(
			'organization_id' => $post['organization_id'],
			'tutor_id'        => $post['tutor_id']
        );
        $this->db->insert('job_application', $params);
    }

	public function reDaftar($id)
	{
		$params = array(
			'approved' => '0'        
		);
		$this->db->where('id', $id);
		$this->db->update('job_application', $params);
	}
	
	public function getOrganizationWhereActivated($id = null)
    {
		$this->db->select('organization.*, city.name as city_name');
		$this->db->from('organization');
		$this->db->join('city', 'city.id = organization.city_id');
		$this->db->where('activated', '1');
		$this->db->order_by('id', 'desc');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
	}
	
	//custom function model tutor
	public function getSubjectByOrganizationId($id = null)
    {
		$this->db->select('subject.*, subject_type.name as subject_type_name, organization.name as organization_name, organization.id as organization_id');
        $this->db->from('subject');
        $this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
        $this->db->join('organization', 'organization.id = subject.organization_id');
        if($id != null) {
			$this->db->where('organization.id', $id);
        }
        $query = $this->db->get();
        return $query;
	}
	
	//custom function model tutor
	public function getTutorIdByBimbelUserId($id = null)
    {
		$this->db->select('tutor.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('tutor');
        $this->db->join('bimbel_user', 'bimbel_user.id = tutor.bimbel_user_id');
        if($id != null) {
            $this->db->where('bimbel_user.id', $id);
        }
        $query = $this->db->get();
        return $query;
	}

	//custom function model tutor
	public function getJobApplicationByIdTutor($id = null)
	{
		$this->db->select('job_application.*, tutor.id as tutor_id, organization.name as organization_name, organization.phone as organization_phone');
		$this->db->from('job_application');
		$this->db->join('tutor', 'tutor.id = job_application.tutor_id');
		$this->db->join('organization', 'organization.id = job_application.organization_id');
		if($id != null) {
			$this->db->where('tutor.bimbel_user_id', $id);
		}
		$this->db->order_by('job_application.approved', 'ASC');
		$query = $this->db->get();
		return $query;
	}

	//custom function model tutor
	public function getJobApplicationByIdTutorByIdOrganization($id, $id_org)
	{
		$this->db->select('job_application.*, tutor.id as tutor_id, organization.name as organization_name, organization.phone as organization_phone');
		$this->db->from('job_application');
		$this->db->join('tutor', 'tutor.id = job_application.tutor_id');
		$this->db->join('organization', 'organization.id = job_application.organization_id');
		$multipleWhere = ['tutor.bimbel_user_id' => $id, 'job_application.organization_id' => $id_org];
		$this->db->where($multipleWhere);
		//$this->db->where('organization.id', $id_org);
		
		$query = $this->db->get();
		return $query;
		// return $this->db->query("SELECT job_application.*, organization.*, tutor.* FROM job_application, organization, tutor WHERE job_application.organization_id = organization.id AND job_application.tutor_id = tutor.id AND tutor.bimbel_user_id = '$id' AND job_application.organization_id = '$id_org'");
	}

	//custom function model tutor
	public function getSubjectByIdTutor($id = null)
	{
		$this->db->select('subject.*, subject_type.name as subject_type_name, tutor.id as tutor_id, organization.name as organization_name');
		$this->db->from('subject');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('subject_tutor', 'subject_tutor.subject_id = subject.id');
		$this->db->join('tutor', 'tutor.id = subject_tutor.tutor_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		if($id != null) {
			$this->db->where('tutor.bimbel_user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
}
