<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_application_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('job_application.*, organization.name as organization_name, tutor.bimbel_user_id, bimbel_user.name as bimbel_user_name');
        $this->db->from('job_application');
        $this->db->join('organization', 'organization.id = job_application.organization_id');
        $this->db->join('tutor', 'tutor.id = job_application.tutor_id');
        $this->db->join('bimbel_user', 'bimbel_user.id = tutor.bimbel_user_id');
        if($id != null) {
            $this->db->where('job_application.id', $id);
        }
        $query = $this->db->get();
        return $query;
	}
	
    public function getJobAppByOrganizationId($id = null)
    {
		$this->db->select('job_application.*, organization.name as organization_name, tutor.bimbel_user_id, bimbel_user.name as bimbel_user_name, bimbel_user.phone as phone, bimbel_user.address as address');
        $this->db->from('job_application');
        $this->db->join('organization', 'organization.id = job_application.organization_id');
        $this->db->join('owner', 'owner.id = organization.owner_id');
        $this->db->join('tutor', 'tutor.id = job_application.tutor_id');
        $this->db->join('bimbel_user', 'bimbel_user.id = tutor.bimbel_user_id');
        if($id != null) {
            $this->db->where('owner.bimbel_user_id', $id);
        }
        $query = $this->db->get();
        return $query;
	}
	
    public function getJobAppByOrganizationIdAndApproved($id = null)
    {
		$this->db->select('job_application.*, organization.name as organization_name, tutor.bimbel_user_id, bimbel_user.name as bimbel_user_name');
        $this->db->from('job_application');
        $this->db->join('organization', 'organization.id = job_application.organization_id');
        $this->db->join('owner', 'owner.id = organization.owner_id');
        $this->db->join('tutor', 'tutor.id = job_application.tutor_id');
        $this->db->join('bimbel_user', 'bimbel_user.id = tutor.bimbel_user_id');
		$this->db->where('job_application.approved', 1);
        if($id != null) {
            $this->db->where('owner.bimbel_user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'approved' => $post['approved'],
			'job_id' => $post['job_id'],
			'tutor_id' => $post['tutor_id']
        );
        $this->db->insert('job_application', $params);
    }

    public function edit($post)
    {
        $params = array(
			'approved' => $post['approved'],
			'job_id' => $post['job_id'],
			'tutor_id' => $post['tutor_id']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('job_application', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('job_application');
    }
}
