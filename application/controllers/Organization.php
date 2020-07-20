<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['organization_m', 'city_m', 'owner_m']);
    }

	public function index()
	{
        $data['row'] = $this->organization_m->get();
		$this->template->load('template', 'organization/organization_data', $data);
	}
	
	public function add()
    {
        $organization = new stdClass();
        $organization->id = null;
		$organization->name = null;
		$organization->address = null;
		$organization->city_id = null;
		$organization->phone = null;
		$organization->payment = null;
		$organization->owner_id = null;
		$organization->activated = null;

		$query_city = $this->city_m->get();
		$query_owner = $this->owner_m->get();

        $data = array(
            'page' => 'add',
			'row' => $organization,
			'city' => $query_city,
			'owner' => $query_owner
        );
        $this->template->load('template', 'organization/organization_form', $data);
    }

    public function edit($id)
    {
        $query = $this->organization_m->get($id);
        if($query->num_rows() > 0) {
			$organization = $query->row();
			$query_city = $this->city_m->get();
			$query_owner = $this->owner_m->get();

            $data = array(
                'page' => 'edit',
				'row' => $organization,
				'city' => $query_city,
				'owner' => $query_owner
            );
            $this->template->load('template', 'organization/organization_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('bimbel')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->organization_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->organization_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('bimbel');
    }

    public function delete($id)
    {
        $this->organization_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('bimbel')."';</script>";
	}

	public function switchss()
	{
		$mode = $_POST['mode'];
		$id = $_POST['id'];
		if ($mode == 'true') //mode is true when button is enabled 
		{
			$str = $this->db->query("UPDATE organization SET activated=1 where id=$id");
			$message = 'Hey my button is enableed!!';
			$success = 'Enabled';
			echo json_encode(array('message' => $message, '$success' => $success));
		} else if ($mode == 'false') {
			$str = $this->db->query("UPDATE organization SET activated=0 where id=$id");
			$message = 'Hey my button is disable!!';
			$success = 'Disabled';
			echo json_encode(array('message' => $message, 'success' => $success));
		}
	}

}
