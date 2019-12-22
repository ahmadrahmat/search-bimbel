<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['city_m', 'province_m']);
    }

	public function index()
	{
        $data['row'] = $this->city_m->get();
		$this->template->load('template', 'city/city_data', $data);
	}
	
	public function add()
    {
        $city = new stdClass();
		$city->id = null;
		$city->name = null;
		$city->city_type = null;
		$city->province_id = null;

		$query_province = $this->province_m->get();

        $data = array(
            'page' => 'add',
			'row' => $city,
			'province' => $query_province
        );
        $this->template->load('template', 'city/city_form', $data);
    }

    public function edit($id)
    {
        $query = $this->city_m->get($id);
        if($query->num_rows() > 0) {
			$city = $query->row();
			$query_province = $this->province_m->get();
			
            $data = array(
                'page' => 'edit',
				'row' => $city,
				'province' => $query_province
            );
            $this->template->load('template', 'city/city_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('city')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->city_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->city_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('city');
    }

    public function delete($id)
    {
        $this->city_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('city')."';</script>";
    }
}
