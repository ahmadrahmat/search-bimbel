<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_owner extends CI_Model {

    public function get($id = null, $bimbel_user_id = null)
    {
        $this->db->select('organization.*, owner.id as owner_id, bimbel_user.name as bimbel_user_name, bimbel_user.phone as bimbel_user_phone, bimbel_user.email as bimbel_user_email');
        $this->db->from('organization');
        $this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		$this->db->where('bimbel_user.id', $bimbel_user_id);
        if($id != null) {
            $this->db->where('organization.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params = array(
            'name' => $post['name'],
			'phone' => $post['phone'],
			'address' => $post['address'],
			'city_id' => $post['city_id'],
			'payment' => $post['payment'],
            'owner_id' => $post['owner_id'],
            'activated' => $post['activated']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('organization', $params);
    }
	
	public function getEnrollmentByStatus0AndOrganizationId($id)
	{
		$this->db->select('enrollment.*, student.id as student_id, tutor.id as tutor_id, subject.name as subject_name, subject_type.name as subject_type_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('tutor', 'tutor.id = subject.tutor_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		$this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->where('enrollment.status', 0);
		if($id != null) {
			$this->db->where('owner.bimbel_user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function getEnrollmentByStatus1AndOrganizationId($id)
	{
		$this->db->select('enrollment.*, student.id as student_id, tutor.id as tutor_id, subject.name as subject_name, subject_type.name as subject_type_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('tutor', 'tutor.id = subject.tutor_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		$this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->where('enrollment.status', 1);
		if($id != null) {
			$this->db->where('owner.bimbel_user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function getEnrollmentByStatus2AndOrganizationId($id)
	{
		$this->db->select('enrollment.*, student.id as student_id, tutor.id as tutor_id, subject.name as subject_name, subject_type.name as subject_type_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('tutor', 'tutor.id = subject.tutor_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		$this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->where('enrollment.status', 2);
		if($id != null) {
			$this->db->where('owner.bimbel_user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	
}
