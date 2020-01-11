<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_profile extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['bimbel_user_m', 'city_m', 'bimbel_user_type_m', 'owner_m', 'model_owner']);
	}

	public function index($id = null)
	{
		if ($this->uri->segment(1) == 'profile') {
			$query = $this->bimbel_user_m->get($this->fungsi->user_login()->id);
			if ($query->num_rows() > 0) {
				$bimbel_user = $query->row();
				$query_city = $this->city_m->get();
				$query_bimbel_user_type = $this->bimbel_user_type_m->get();

				$data = array(
					'page' => 'edit',
					'row' => $bimbel_user,
					'city' => $query_city,
					'bimbel_user_type' => $query_bimbel_user_type
				);
				$this->template->load('template', 'profile/profile_data', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "<script>window.location='" . site_url('profile') . "';</script>";
			}
		} elseif ($this->uri->segment(1) == 'profile_organization') {
			$data['row'] = $this->model_owner->get($id = null, $this->fungsi->user_login()->id);
			$this->template->load('template', 'profile/profile_data', $data);
		} elseif ($this->uri->segment(1) == 'profile_organization_edit') {
			$query = $this->model_owner->get($id, $this->fungsi->user_login()->id);
			if ($query->num_rows() > 0) {
				$organization = $query->row();
				$query_organization_images = $this->model_owner->getOrganizationImages($id);
				$query_city = $this->city_m->get();
				$query_owner = $this->owner_m->get();

				$data = array(
					'page' => 'edit',
					'row' => $organization,
					'organization_images' => $query_organization_images,
					'city' => $query_city,
					'owner' => $query_owner
				);
				$this->template->load('template', 'profile/profile_data', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "<script>window.location='" . site_url('profile_organization') . "';</script>";
			}
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			$this->bimbel_user_m->add($post);
		} else if (isset($_POST['edit'])) {
			$this->bimbel_user_m->edit($post);
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('profile');
	}

	/* public function organization_process()
	{
		$config['upload_path']    = './assets/uploads/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'img-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['edit'])) {
			if(@$_FILES['image']['name'] != null) {
				if($this->upload->do_upload('image')) {

					$data = $this->model_owner->get($post['id'], $this->fungsi->user_login()->id)->row();
					if($data->image != null) {
						$target_file = './assets/uploads/'.$data->image;
						unlink($target_file);
					}

					$post['image'] = $this->upload->data('file_name');
					$this->model_owner->edit($post);
					if($this->db->affected_rows() >0 ) {
						$this->session->set_flashdata('success', 'Data berhasil disimpan');
					}
					redirect('profile_organization_edit/' . $post['id']);
				} else {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('error', $error);
					redirect('profile_organization_edit/' . $post['id']);
				}
			} else {
				$post['image'] = null;
				$this->model_owner->edit($post);
				if($this->db->affected_rows() >0 ) {
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
				}
				redirect('profile_organization_edit/' . $post['id']);
			}
		}
	} */

	public function organization_process()
	{
		$data = [];

		$count = count($_FILES['images']['name']);

		$post = $this->input->post(null, TRUE);
		if (isset($_POST['edit'])) {
			if (count(array_filter($_FILES['images']['name'])) != 0) {
				$data = $this->model_owner->getOrganizationImages($post['id']);
				if ($data->num_rows() > 0) {
					foreach ($data->result() as $data) {
						$target_file = './assets/uploads/' . $data->image;
						unlink($target_file);

						$this->db->where('organization_id', $post['id']);
						$this->db->delete('organization_images');
					}
				}

				for ($i = 0; $i < $count; $i++) {
					if (!empty($_FILES['images']['name'][$i])) {

						$_FILES['file']['name'] = $_FILES['images']['name'][$i];
						$_FILES['file']['type'] = $_FILES['images']['type'][$i];
						$_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
						$_FILES['file']['error'] = $_FILES['images']['error'][$i];
						$_FILES['file']['size'] = $_FILES['images']['size'][$i];

						$config['upload_path']    = './assets/uploads/';
						$config['allowed_types']  = 'gif|jpg|png|jpeg';
						$config['max_size']       = 2048;
						$config['file_name']      = 'img-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
						$this->load->library('upload', $config);

						if ($this->upload->do_upload('file')) {
							$fileData = $this->upload->data();
							$uploadData[$i]['image'] = $fileData['file_name'];
							$uploadData[$i]['organization_id'] = $post['id'];
						}
					}
				}

				if (!empty($uploadData)) {
					$this->db->insert_batch('organization_images', $uploadData);
					$this->model_owner->edit($post);
					if ($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('success', 'Data berhasil disimpan');
					}
					redirect('profile_organization_edit/' . $post['id']);
				}
			} else {
				$post['images'] = null;
				$this->model_owner->edit($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data berhasil disimpan');
				}
				redirect('profile_organization_edit/' . $post['id']);
			}
		}
	}


	public function account_process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['edit'])) {
			$this->bimbel_user_m->edit($post);
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('profile');
	}
}
