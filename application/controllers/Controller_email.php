<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_email extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['model_email', 'bimbel_user_m']);
	}

	public function index()
	{
		$data['row'] = $this->model_email->getInbox($this->fungsi->user_login()->id);
		$this->template->load('template', 'email/email_data', $data);
	}

	public function compose()
	{
		$compose = new stdClass();
		$compose->id = null;
		$compose->send_to = null;
		$compose->send_by = null;
		$compose->subject = null;
		$compose->message = null;

		$contact = $this->model_email->getContact($this->fungsi->user_login()->id);
		$data = array(
			'page' => 'compose',
			'row' => $compose,
			'contact' => $contact
		);

		$this->template->load('template', 'email/compose_form', $data);
	}

	public function reply($id)
	{
		$null = '';
		$compose = $this->model_email->getInbox($null, $id)->row();
		$contact = $this->model_email->getContact($this->fungsi->user_login()->id);
		$data = array(
			'page' => 'reply',
			'row' => $compose,
			'contact' => $contact
		);

		$this->template->load('template', 'email/compose_form', $data);
	}

	public function read($id)
	{
		$read = $this->model_email->getInbox($this->fungsi->user_login()->id, $id)->row();
		$contact = $this->model_email->getContact($this->fungsi->user_login()->id);
		$data = array(
			'page' => 'read',
			'row' => $read,
			'contact' => $contact
		);

		$param = array(
			'status' => '1'
		);
		$this->db->where('id', $id);
		$this->db->update('email', $param);

		$this->template->load('template', 'email/email_read_data', $data);
	}

	public function read_sent($id)
	{
		$read = $this->model_email->getSent($this->fungsi->user_login()->id, $id)->row();
		$contact = $this->model_email->getContact($this->fungsi->user_login()->id);
		$data = array(
			'page' => 'read_sent',
			'row' => $read,
			'contact' => $contact
		);

		$this->template->load('template', 'email/email_read_sent_data', $data);
	}

	public function sent()
	{
		$data['row'] = $this->model_email->getSent($this->fungsi->user_login()->id);
		$this->template->load('template', 'email/email_sent_data', $data);
	}

	public function contact()
	{
		if (isset($_GET['term'])) {
			$result = $this->model_email->cari($_GET['term']);
			if (count($result) > 0) {
				foreach ($result as $row)
					$arr_result[] = $row->name;
				echo json_encode($arr_result);
			}
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['compose'])) {
			$this->model_email->send($post, $this->fungsi->user_login()->id);
		} else if (isset($_POST['reply'])) {
			$this->model_email->reply($post, $this->fungsi->user_login()->id);
		}

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		}
		redirect('email');
	}
}
