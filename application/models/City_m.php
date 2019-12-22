<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('city.*, province.name as province_name');
        $this->db->from('city');
        $this->db->join('province', 'province.id = city.province_id');
        if($id != null) {
            $this->db->where('city.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'name' => $post['name'],
			'city_type' => $post['city_type'],
			'province_id' => $post['province_id']
        );
        $this->db->insert('city', $params);
    }

    public function edit($post)
    {
        $params = array(
			'name' => $post['name'],
			'city_type' => $post['city_type'],
			'province_id' => $post['province_id']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('city', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('city');
    }
}
