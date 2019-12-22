<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_m extends CI_Model {

    public function get($id = null)
    {
		$this->db->select('tutor.*, bimbel_user.name as bimbel_user_name');
        $this->db->from('tutor');
        $this->db->join('bimbel_user', 'bimbel_user.id = tutor.bimbel_user_id');
        if($id != null) {
            $this->db->where('tutor.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'bimbel_user_id' => $post['bimbel_user_id']
        );
        $this->db->insert('tutor', $params);
    }

    public function edit($post)
    {
        $params = array(
			'bimbel_user_id' => $post['bimbel_user_id']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('tutor', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tutor');
    }
}
