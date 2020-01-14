<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_owner extends CI_Model 
{

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
	
	public function getOrganizationImages($id)
    {
        $this->db->select('*');
        $this->db->from('organization_images');
		$this->db->where('organization_id', $id);
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
			'description' => $post['description'],
			'payment' => $post['payment'],
            'owner_id' => $post['owner_id'],
            'activated' => $post['activated']
		);
		
        $this->db->where('id', $post['id']);
        $this->db->update('organization', $params);
    }
	
	public function getEnrollmentByStatus0AndOrganizationId($id)
	{
<<<<<<< HEAD
		$this->db->select('subject.id as subject_id');
		$this->db->from('subject');
		$this->db->join('subject_tutor', 'subject.id = subject_tutor.subject_id');
		$this->db->join('job_application', 'job_application.tutor_id = subject_tutor.tutor_id');
		// $this->db->where('job_application.approved', '1');
		$sql = $this->db->get()->result();

		foreach ($sql as $key) {
			$subject_id[] = $key->subject_id;
		}

=======
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
		$this->db->select('enrollment.*, student.id as student_id, subject.name as subject_name, subject_type.name as subject_type_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		$this->db->join('owner', 'owner.id = organization.owner_id');
<<<<<<< HEAD
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		// $this->db->where_in('subject.id', $subject_id);
		$this->db->where('bimbel_user.id', $id);
=======
		$this->db->where('owner.bimbel_user_id', $id);
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
		$this->db->where('enrollment.status', 0);

		$query = $this->db->get();
		return $query;
	}

	public function getEnrollmentByStatus1AndOrganizationId($id)
	{
<<<<<<< HEAD
		$this->db->select('subject.id as subject_id');
		$this->db->from('subject');
		$this->db->join('subject_tutor', 'subject.id = subject_tutor.subject_id');
		$this->db->join('job_application', 'job_application.tutor_id = subject_tutor.tutor_id');
		$this->db->where('job_application.approved', '1');
		$sql = $this->db->get()->result();

		foreach ($sql as $key) {
			$subject_id[] = $key->subject_id;
		}

=======
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
		$this->db->select('enrollment.*, student.id as student_id, subject.name as subject_name, subject_type.name as subject_type_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		$this->db->join('owner', 'owner.id = organization.owner_id');
<<<<<<< HEAD
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		$this->db->where_in('subject.id', $subject_id);
		$this->db->where('bimbel_user.id', $id);
		$this->db->where('enrollment.status', 1);

=======
		$this->db->where('owner.bimbel_user_id', $id);
		$this->db->where('enrollment.status', 1);
		
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
		$query = $this->db->get();
		return $query;
	}

	public function getEnrollmentByStatus23AndOrganizationId($id)
	{
<<<<<<< HEAD
		$this->db->select('subject.id as subject_id');
		$this->db->from('subject');
		$this->db->join('subject_tutor', 'subject.id = subject_tutor.subject_id');
		$this->db->join('job_application', 'job_application.tutor_id = subject_tutor.tutor_id');
		$this->db->where('job_application.approved', '1');
		$sql = $this->db->get()->result();

		foreach ($sql as $key) {
			$subject_id[] = $key->subject_id;
		}

=======
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
		$this->db->select('enrollment.*, student.id as student_id, subject.name as subject_name, subject_type.name as subject_type_name');
		$this->db->from('enrollment');
		$this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
		$this->db->join('organization', 'organization.id = subject.organization_id');
		$this->db->join('owner', 'owner.id = organization.owner_id');
<<<<<<< HEAD
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		$this->db->where_in('subject.id', $subject_id);
		$this->db->where('bimbel_user.id', $id);
		$this->db->where('(enrollment.status = 2 OR enrollment.status = 3)');

=======
		$this->db->where('owner.bimbel_user_id', $id);
		$this->db->where('enrollment.status', 2);
		$this->db->or_where('enrollment.status', 3);
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
		$query = $this->db->get();
		return $query;
	}

	public function getTutorBySubjectId($id)
	{
		$query = $this->db->query("SELECT * FROM subject_tutor WHERE subject_id = $id");
		return $query;
	}

	
}
