<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('owner.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('owner');
        $this->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
        if($id != null) {
            $this->db->where('owner.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'bimbel_user_id' => $post['bimbel_user_id']
        );
        $this->db->insert('owner', $params);
    }

    public function edit($post)
    {
        $params = array(
			'bimbel_user_id' => $post['bimbel_user_id']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('owner', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('owner');
    }
}
