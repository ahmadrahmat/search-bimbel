<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_m extends CI_Model {

    public function getReview($id)
    {
		$this->db->select('review.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('review');
        $this->db->join('bimbel_user', 'bimbel_user.id = review.id_student');
        $this->db->join('organization', 'organization.id = review.id_organization');
        $this->db->where('review.id_organization', $id);
        $this->db->order_by('review.id_review', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    
    public function getReviewByOwner($id)
    {
		$this->db->select('review.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('review');
        $this->db->join('bimbel_user', 'bimbel_user.id = review.id_student');
        $this->db->join('organization', 'organization.id = review.id_organization');
        $this->db->join('owner', 'owner.id = organization.owner_id');
        $this->db->where('owner.bimbel_user_id', $id);
        $this->db->order_by('review.id_review', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'id_student'      => $post['id_student'],
			'id_organization' => $post['id_organization'],
			'id_subject'      => $post['id_subject'],
			'content'         => $post['content'],
			'rating'          => $post['rating']
        );
        $this->db->insert('review', $params);
    }

    public function edit($post)
    {
        $params = array(
			'id_student'      => $post['id_student'],
			'id_organization' => $post['id_organization'],
			'id_subject'      => $post['id_subject'],
			'content'         => $post['content'],
			'rating'          => $post['rating']
        );
        $this->db->where('id_review', $post['id_review']);
        $this->db->update('review', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('review');
	}
	
}
