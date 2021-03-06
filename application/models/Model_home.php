<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_home extends CI_Model
{
	public function cari_subject($word)
	{
		$this->db->like('name', $word, 'both');
		$this->db->group_by('organization_id');
		$this->db->order_by('name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('subject')->result();
	}

	public function cari_organization($word)
	{
		$this->db->like('name', $word, 'both');
		$this->db->where('activated', '1');
		$this->db->group_by('id');
		$this->db->order_by('name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('organization')->result();
	}

	public function get_count($subject = null, $organization = null, $city = null)
	{
		if ($subject != null) {
			$this->db->select('subject.*, organization.*, organization.name as organization_name, organization.id as organization_id, subject_type.name as subject_type_name, city.*, city.name as city_name');
			} else {
				$this->db->select('organization.*, organization.name as organization_name, organization.id as organization_id, city.*, city.name as city_name');	
			}
			$this->db->from('organization');
			if ($subject != null) {
			$this->db->join('subject', 'subject.organization_id = organization.id');
			$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
			}
			$this->db->join('city', 'city.id = organization.city_id');
			if ($subject != null) {
				$this->db->where('subject.name', $subject);
			}
			if ($organization != null) {
				$this->db->like('organization.name', $organization, 'both');
			}
			if ($city != null) {
				$this->db->where('city.id', $city);
			}
			$this->db->order_by('organization.id', 'DESC');


		$query = $this->db->get()->num_rows();
		return $query;
	}

	public function fetch_data($subject = null, $organization = null, $city = null, $limit, $start)
	{
		if ($subject != null) {
			$this->db->select('subject.*, organization.*, organization.name as organization_name, organization.id as organization_id, subject_type.name as subject_type_name, city.*, city.name as city_name');
			} else {
				$this->db->select('organization.*, organization.name as organization_name, organization.id as organization_id, city.*, city.name as city_name');	
			}
			$this->db->from('organization');
			if ($subject != null) {
			$this->db->join('subject', 'subject.organization_id = organization.id');
			$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
			}
			$this->db->join('city', 'city.id = organization.city_id');
			if ($subject != null) {
				$this->db->where('subject.name', $subject);
			}
			if ($organization != null) {
				$this->db->like('organization.name', $organization, 'both');
			}
			if ($city != null) {
				$this->db->where('city.id', $city);
			}
			$this->db->where('organization.activated', '1');
			$this->db->order_by('organization.id', 'DESC');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	public function latest_data($subject = null, $organization = null, $city = null, $limit, $start)
	{
		if ($subject != null) {
			$this->db->select('subject.*, organization.*, organization.name as organization_name, organization.id as organization_id, subject_type.name as subject_type_name, city.*, city.name as city_name');
			} else {
				$this->db->select('organization.*, organization.name as organization_name, organization.id as organization_id, city.*, city.name as city_name');	
			}
			$this->db->from('organization');
			if ($subject != null) {
			$this->db->join('subject', 'subject.organization_id = organization.id');
			$this->db->join('subject_type', 'subject_type.id = subject.subject_type_id');
			}
			$this->db->join('city', 'city.id = organization.city_id');
			if ($subject != null) {
				$this->db->where('subject.name', $subject);
			}
			if ($organization != null) {
				$this->db->where('organization.name', $organization);
			}
			if ($city != null) {
				$this->db->where('city.id', $city);
			}
			$this->db->where('organization.activated', '1');
			$this->db->order_by('organization.id', 'DESC');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	public function popularbycity()
	{
		$query = $this->db->query("SELECT COUNT(organization.id) as counts, city.* FROM organization, city WHERE organization.activated='1' AND organization.city_id=city.id GROUP BY organization.city_id ORDER BY counts DESC limit 4");
		return $query;
	}

	public function popularbycityAll()
	{
		$query = $this->db->query("SELECT COUNT(organization.id) as counts, city.* FROM organization, city WHERE organization.activated='1' AND organization.city_id=city.id GROUP BY organization.city_id ORDER BY counts DESC");
		return $query;
	}

}
