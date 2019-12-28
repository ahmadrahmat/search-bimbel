<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('organization.*, owner.id as owner_id, bimbel_user.name as bimbel_user_name, bimbel_user.phone as bimbel_user_phone, bimbel_user.email as bimbel_user_email, city.name as city_name, city.city_type as city_type');
        $this->db->from('organization');
        $this->db->join('owner', 'owner.id = organization.owner_id');
		$this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
		$this->db->join('city', 'city.id = organization.city_id');
        if($id != null) {
            $this->db->where('organization.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
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
        $this->db->insert('organization', $params);
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

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('organization');
	}
	
}
