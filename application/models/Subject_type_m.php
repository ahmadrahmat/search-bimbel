<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_type_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('subject_type');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
            'name' => $post['name']
        );
        $this->db->insert('subject_type', $params);
    }

    public function edit($post)
    {
        $params = array(
            'name' => $post['name']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('subject_type', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('subject_type');
    }
}
