<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_email extends CI_Model
{
	public function getSent($send_by = null, $id = null)
	{
		$this->db->select('email.*, bimbel_user.name as bimbel_user_name');
		$this->db->from('email');
		$this->db->join('bimbel_user', 'bimbel_user.id = email.send_to');
		if ($send_by != null) {
			$this->db->where('email.send_by', $send_by);
		}
		if ($id != null) {
			$this->db->where('email.id', $id);
		}
		$this->db->order_by('email.time', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	public function getInbox($send_to = null, $id = null)
	{
		$this->db->select('email.*, bimbel_user.name as bimbel_user_name');
		$this->db->from('email');
		$this->db->join('bimbel_user', 'bimbel_user.id = email.send_by');
		if ($send_to != null) {
			$this->db->where('email.send_to', $send_to);
		}
		if ($id != null) {
			$this->db->where('email.id', $id);
		}
		$this->db->order_by('email.time', 'DESC');
		$query = $this->db->get();
		return $query;
	}

	public function getContact($id)
	{
		$getID = $this->db->query("SELECT bimbel_user_type_id FROM bimbel_user WHERE id = $id")->row()->bimbel_user_type_id;
		if ($getID == 4 OR $getID == 3) {
			$cek = $this->db->query("SELECT id FROM bimbel_user WHERE bimbel_user_type_id = 2")->result();
			foreach ($cek as $key) {
				$array[] = $key->id;
			}
			$this->db->select('*');
			$this->db->from('bimbel_user');
			$this->db->where_in('id', $array);
		} else {
			$cek = $this->db->query("SELECT id FROM bimbel_user WHERE bimbel_user_type_id = $getID")->result();
			foreach ($cek as $key) {
				$array[] = $key->id;
			}
			$this->db->select('*');
			$this->db->from('bimbel_user');
			$this->db->where_not_in('id', $array);
		}

		$this->db->where_not_in('id', 1);
		$query = $this->db->get();
		return $query;
	}

	public function getContactOwner($id)
	{
		$getID = $this->db->query("SELECT bimbel_user_type_id FROM bimbel_user WHERE id = $id")->row()->bimbel_user_type_id;
		$cek = $this->db->query("SELECT id FROM bimbel_user WHERE bimbel_user_type_id = $getID")->result();
		foreach ($cek as $key) {
			$array[] = $key->id;
		}
		$this->db->select('*');
		$this->db->from('bimbel_user');
		$this->db->where_not_in('id', $array);
		$this->db->where_not_in('id', 1);
		$query = $this->db->get();
		return $query;
	}

	public function cari($name)
	{
		$this->db->like('name', $name, 'both');
		$this->db->group_by('id');
		$this->db->order_by('name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('bimbel_user')->result();
	}

	public function send($post, $send_by)
	{
		$params = array(
			'send_to' => $post['send_to'],
			'send_by' => $send_by,
			'subject' => $post['subject'],
			'message' => $post['message']
		);
		$this->db->insert('email', $params);
	}

	public function reply($post, $send_by)
	{
		$params = array(
			'send_to' => $post['send_to'],
			'send_by' => $send_by,
			'subject' => $post['subject'],
			'message' => $post['message']
		);
		$this->db->insert('email', $params);
	}
}
