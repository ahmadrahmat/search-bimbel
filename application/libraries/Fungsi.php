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
