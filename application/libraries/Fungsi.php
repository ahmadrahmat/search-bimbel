<?php

Class Fungsi {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('bimbel_user_m');
        $id = $this->ci->session->userdata('id');
        $user_data = $this->ci->bimbel_user_m->get($id)->row();
        return $user_data;
    }
    
    function organization_login()
    {
        $id = $this->ci->session->userdata('id');
        $this->ci->db->select('organization.id as organization_id');
        $this->ci->db->from('owner');
        $this->ci->db->join('organization', 'organization.owner_id = owner.id');
        $this->ci->db->join('bimbel_user', 'bimbel_user.id = owner.bimbel_user_id');
        $this->ci->db->where('bimbel_user.id', $id);
        $organization_data = $this->ci->db->get()->row()->organization_id;
        return $organization_data;
    }
    
    function get_student_name($id)
    {
		$this->ci->load->model('bimbel_user_m');
		
        $name = $this->ci->bimbel_user_m->getStudentName($id)->row();
        return $name;
	}
	
	function get_tutor_name($id)
    {
		$this->ci->load->model('bimbel_user_m');
		
        $name = $this->ci->bimbel_user_m->getTutorName($id)->row();
        return $name;
    }
}
