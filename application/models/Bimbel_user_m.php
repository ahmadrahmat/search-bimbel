<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bimbel_user_m extends CI_Model
{

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('bimbel_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;
	}
	
	public function check_organization($id)
	{
		$this->db->select('organization.*');
		$this->db->from('organization');
		$this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		$this->db->where('bimbel_user.id', $id);
		$this->db->where('organization.activated', 1);
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->select('bimbel_user.*, city.name as city_name, province.name as province_name, bimbel_user_type.name as bimbel_user_type_name');
		$this->db->from('bimbel_user');
		$this->db->join('city', 'city.id = bimbel_user.city_id');
		$this->db->join('province', 'province.id = city.province_id');
		$this->db->join('bimbel_user_type', 'bimbel_user_type.id = bimbel_user.bimbel_user_type_id');
		if ($id != null) {
			$this->db->where('bimbel_user.id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['username']            = $post['username'];
		$params['name']                = $post['name'];
		$params['password']            = sha1($post['password']);
		$params['email']               = $post['email'];
		$params['phone']               = $post['phone'];
		$params['address']             = $post['address'];
		$params['city_id']             = $post['city_id'];
		$params['bimbel_user_type_id'] = $post['bimbel_user_type_id'];
		$this->db->insert('bimbel_user', $params);

		if ($post['bimbel_user_type_id'] == 2) {
			$data['bimbel_user_id'] = $this->db->insert_id();
			$this->db->insert('owner', $data);
			$field['name']     = $post['name'];
			$field['phone']    = $post['phone'];
			$field['address']  = $post['address'];
			$field['city_id']  = $post['city_id'];
			$field['owner_id'] = $this->db->insert_id();
			$this->db->insert('organization', $field);
		} elseif ($post['bimbel_user_type_id'] == 3) {
			$data['bimbel_user_id'] = $this->db->insert_id();
			$this->db->insert('tutor', $data);
		} elseif ($post['bimbel_user_type_id'] == 4) {
			$data['bimbel_user_id'] = $this->db->insert_id();
			$this->db->insert('student', $data);
		}
	}

	public function edit($post)
	{
		$params['username'] = $post['username'];
		$params['name'] = $post['name'];
		if (!empty($post['password'])) {
			$params['password'] = sha1($post['password']);
		}
		$params['email'] = $post['email'];
		$params['phone'] = $post['phone'];
		$params['address'] = $post['address'];
		$params['city_id'] = $post['city_id'];
		$params['bimbel_user_type_id'] = $post['bimbel_user_type_id'];
		$this->db->where('id', $post['id']);
		$this->db->update('bimbel_user', $params);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('bimbel_user');
	}

	public function getStudentName($id)
	{
		$this->db->select('student.id, bimbel_user.name as name');
		$this->db->from('student');
		$this->db->join('bimbel_user', 'bimbel_user.id = student.bimbel_user_id');
		$this->db->where('student.id', $id);

		$query = $this->db->get();
		return $query;
	}

	public function getTutorName($id)
	{
		$this->db->select('tutor.id, bimbel_user.name as name');
		$this->db->from('tutor');
		$this->db->join('bimbel_user', 'bimbel_user.id = tutor.bimbel_user_id');
		$this->db->where('tutor.id', $id);

		$query = $this->db->get();
		return $query;
	}

	function cekUsername($username="")
	{
		$query = $this->db->get_where('bimbel_user', array('username' => $username));
		$query = $query->result_array();
		return $query;
	}

	function cekEmail($email="")
	{
		$query = $this->db->get_where('bimbel_user', array('email' => $email));
		$query = $query->result_array();
		return $query;
	}
}
