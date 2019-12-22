<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('student.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('student');
        $this->db->join('bimbel_user', 'bimbel_user.id = student.bimbel_user_id');
        if($id != null) {
            $this->db->where('student.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'bimbel_user_id' => $post['bimbel_user_id']
        );
        $this->db->insert('student', $params);
    }

    public function edit($post)
    {
        $params = array(
			'bimbel_user_id' => $post['bimbel_user_id']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('student', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('student');
	}
	
}
