<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Province extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('province_m');
    }

	public function index()
	{
        $data['row'] = $this->province_m->get();
		$this->template->load('template', 'province/province_data', $data);
	}
	
	public function add()
    {
        $province = new stdClass();
        $province->id = null;
		$province->name = null;
        $data = array(
            'page' => 'add',
            'row' => $province
        );
        $this->template->load('template', 'province/province_form', $data);
    }

    public function edit($id)
    {
        $query = $this->province_m->get($id);
        if($query->num_rows() > 0) {
            $province = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $province
            );
            $this->template->load('template', 'province/province_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('province')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->province_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->province_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('province');
    }

    public function delete($id)
    {
        $this->province_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('province')."';</script>";
    }
}
