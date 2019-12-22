<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Province_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('province');
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
        $this->db->insert('province', $params);
    }

    public function edit($post)
    {
        $params = array(
            'name' => $post['name']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('province', $params);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('province');
    }
}
