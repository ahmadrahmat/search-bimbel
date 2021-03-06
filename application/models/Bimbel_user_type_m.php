<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbel_user_type_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('bimbel_user_type');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getRegist()
    {
        $this->db->from('bimbel_user_type');
        $this->db->where('id >', '2');
        
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = array(
            'name' => $post['name']
        );
        $this->db->insert('bimbel_user_type', $params);
    }

    public function edit($post)
    {
        $params = array(
            'name' => $post['name']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('bimbel_user_type', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bimbel_user_type');
    }
}
