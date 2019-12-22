<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('job');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
			'name' => $post['name'],
			'age' => $post['age'],
			'other_note' => $post['other_note']
        );
        $this->db->insert('job', $params);
    }

    public function edit($post)
    {
        $params = array(
            'name' => $post['name'],
			'age' => $post['age'],
			'other_note' => $post['other_note']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('job', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('job');
    }
}
