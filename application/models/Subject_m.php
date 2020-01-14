<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('subject.*, subject_type.name as subject_type_name, organization.name as organization_name, subject_tutor.*, tutor.*');
        $this->db->from('subject');
        $this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
        $this->db->join('organization', 'organization.id = subject.organization_id');
        $this->db->join('subject_tutor', 'subject_tutor.subject_id = subject.id');
        $this->db->join('tutor', 'subject_tutor.tutor_id = tutor.id');
        if($id != null) {
            $this->db->where('subject.id', $id);
        }
        $query = $this->db->get();
        return $query;
	}
	
    public function getSubjectByOrganizationId($id = null, $bimbel_user_id = null)
    {
		$this->db->select('subject.*, subject_type.name as subject_type_name, organization.name as organization_name');
        $this->db->from('subject');
        $this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
        $this->db->join('organization', 'organization.id = subject.organization_id');
        $this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->where('owner.bimbel_user_id', $bimbel_user_id);
        if($id != null) {
            $this->db->where('subject.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'name' => $post['name'],
			'description' => $post['description'],
			'subject_type_id' => $post['subject_type_id'],
			'organization_id' => $post['organization_id']
        );
        $this->db->insert('subject', $params);
    }

    public function edit($post)
    {
		if($post['tutor_id']){
            $this->db->where('subject_id', $post['id']);
            $this->db->delete('subject_tutor');
            for($i=0;$i<count($post['tutor_id']);$i++){
                $data['tutor_id'] = $post['tutor_id'][$i];
                $data['subject_id'] = $post['id'];
                $this->db->insert('subject_tutor', $data);
            }
		} else {
			$this->db->where('subject_id', $post['id']);
            $this->db->delete('subject_tutor');
		}
		
        $params = array(
			'name' => $post['name'],
			'description' => $post['description'],
			'subject_type_id' => $post['subject_type_id'],
			'organization_id' => $post['organization_id']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('subject', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('subject');
	}
	
}
