<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enrollment_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('enrollment.*, student.id as student_id, subject.name as subject_name, bimbel_user.name as bimbel_user_name');
        $this->db->from('enrollment');
        $this->db->join('student', 'student.id = enrollment.student_id');
		$this->db->join('subject', 'subject.id = enrollment.subject_id');
		$this->db->join('bimbel_user', 'bimbel_user.id = student.bimbel_user_id');
        if($id != null) {
            $this->db->where('enrollment.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'start_date'     => $post['start_date'],
			'end_date'       => $post['end_date'],
			'start_time'     => $post['start_time'],
			'duration'       => $post['duration'],
			'num_of_meeting' => $post['num_of_meeting'],
			'phone'          => $post['phone'],
			'note'           => $post['note'],
			'student_id'     => $post['student_id'],
			'subject_id'     => $post['subject_id']
        );
        $this->db->insert('enrollment', $params);
    }

    public function edit($post)
    {
        $params = array(
			'start_date'     => $post['start_date'],
			'end_date'       => $post['end_date'],
			'start_time'     => $post['start_time'],
			'duration'       => $post['duration'],
			'num_of_meeting' => $post['num_of_meeting'],
			'phone'          => $post['phone'],
			'note'           => $post['note'],
			'student_id'     => $post['student_id'],
			'subject_id'     => $post['subject_id'],
			'status'         => $post['status']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('enrollment', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('enrollment');
	}
	
}
