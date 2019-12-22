<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

	//custom function model siswa
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
	
	//custom function model siswa
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
	
	//custom function model siswa
	public function getStudentIdByBimbelUserId($id = null)
    {
		$this->db->select('student.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('student');
        $this->db->join('bimbel_user', 'bimbel_user.id = student.bimbel_user_id');
        if($id != null) {
            $this->db->where('bimbel_user.id', $id);
        }
        $query = $this->db->get();
        return $query;
	}

	//custom function model siswa
	public function getEnrollmentByIdStudent($id = null)
	{
		$this->db->select('enrollment.*, student.id as student_id, subject.name as subject_name, organization.name as organization_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		if($id != null) {
			$this->db->where('student.bimbel_user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
}
