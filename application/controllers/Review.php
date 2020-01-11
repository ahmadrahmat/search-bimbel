<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('review_m');
    }

	public function index()
	{
        $user = $this->fungsi->user_login()->id;
        $data['row'] = $this->review_m->getReviewByOwner($user);
		$this->template->load('template', 'review/review-data', $data);
	}
	
	public function add()
    {
        $review = new stdClass();
        $review->id = null;
		$review->name = null;
        $data = array(
            'page' => 'add',
            'row' => $review
        );
        $this->template->load('template', 'review/review-form', $data);
    }

    public function edit($id)
    {
        $query = $this->review_m->get($id);
        if($query->num_rows() > 0) {
            $review = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $review
            );
            $this->template->load('template', 'review/review-form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "<script>window.location='".site_url('review')."';</script>";
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->review_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->review_m->edit($post);
        } 

        if($this->db->affected_rows() >0 ) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
        }
        redirect('review');
    }

    public function delete($id)
    {
        $this->review_m->delete($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('review')."';</script>";
    }
}
