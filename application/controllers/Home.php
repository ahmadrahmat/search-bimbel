<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model(['model_home', 'model_siswa', 'model_tutor', 'organization_m', 'enrollment_m', 'city_m', 'review_m']);
    }

	public function index()
	{
		$data['row'] = $this->model_siswa->getOrganizationWhereActivated();
		$data['popcity'] = $this->model_home->popularbycity();
		$data['city'] = $this->city_m->get();
		$this->template->load('frontend/template', 'frontend/index', $data);
	}

	public function detail_bimbel($id)
	{
		$query_student      = $this->model_siswa->getStudentIdByBimbelUserId($this->fungsi->user_login()->id);
		$query_tutor        = $this->model_tutor->getTutorIdByBimbelUserId($this->fungsi->user_login()->id);
		$query_subject      = $this->model_siswa->getSubjectByOrganizationId($id);
		$query_job          = $this->model_tutor->getJobApplicationByIdTutorByIdOrganization(($this->fungsi->user_login()->id), $id);
		$query_organization = $this->organization_m->get($id);
		$query_review		= $this->review_m->getReview($id);

		$data = array(
            'page'            => 'add',
            'row'             => $this->model_siswa->getSubjectByOrganizationId($id),
            'tutor'           => $query_tutor,
            'org'             => $query_organization,
            'student'         => $query_student,
            'subject'         => $query_subject,
            'job'             => $query_job,
            'review'          => $query_review,
			'organization_id' => $id,
			'bimbel_user'	  => $this->fungsi->user_login()->id
        );
		$this->template->load('frontend/template', 'frontend/page-detail', $data);
	}

	public function autocomplete_subject()
	{
        if (isset($_GET['term'])) {
            $result = $this->model_home->cari_subject($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->name;
                echo json_encode($arr_result);
            }
        }
	}

	public function autocomplete_organization()
	{
        if (isset($_GET['term'])) {
            $result = $this->model_home->cari_organization($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->name;
                echo json_encode($arr_result);
            }
        }
	}

	public function cari()
	{
		$this->load->library('pagination');
		$subject = $this->input->get('subject');
		$organization = $this->input->get('organization');
		$city = $this->input->get('city');
		$search = $this->input->get('search');
		//konfigurasi pagination
		$config['base_url'] = site_url('home/cari?subject='. $subject .'&organization='. $organization .'&city='. $city);
		$config['total_rows'] = $this->model_home->get_count($subject, $organization, $city); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config['enable_query_strings'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['page_query_string'] = TRUE;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		if ($this->input->get('page')) {
			$sgm = (int) trim($this->input->get('page'));
			$segment = $config['per_page'] * ($sgm - 1);
		} else {
			$segment = 0;
		}
		
		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
	
		$this->pagination->initialize($config);
		
		$data['row'] = $this->model_home->fetch_data($subject, $organization, $city, $config["per_page"], $segment);           
	
		$data['pagination'] = $this->pagination->create_links();

		$data['total_rows'] = $this->model_home->get_count($subject, $organization, $city);
		$data['city'] = $this->city_m->get();
		$this->template->load('frontend/template', 'frontend/search-list', $data);
	}

	public function latest()
	{
		$this->load->library('pagination');
		$subject = $this->input->get('subject');
		$organization = $this->input->get('organization');
		$city = $this->input->get('city');
		$search = $this->input->get('search');
		//konfigurasi pagination
		$config['base_url'] = site_url('home/latest?subject='. $subject .'&organization='. $organization .'&city='. $city);
		$config['total_rows'] = $this->model_home->get_count($subject, $organization, $city); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config['enable_query_strings'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['page_query_string'] = TRUE;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		if ($this->input->get('page')) {
			$sgm = (int) trim($this->input->get('page'));
			$segment = $config['per_page'] * ($sgm - 1);
		} else {
			$segment = 0;
		}
		
		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
	
		$this->pagination->initialize($config);
		
		$data['row'] = $this->model_home->latest_data($subject, $organization, $city, $config["per_page"], $segment);           
	
		$data['pagination'] = $this->pagination->create_links();

		$data['total_rows'] = $this->model_home->get_count($subject, $organization, $city);
		$data['city'] = $this->city_m->get();
		$this->template->load('frontend/template', 'frontend/bimbel-latest', $data);
	}

	public function about()
	{
		// $data['row'] = $this->model_siswa->getOrganizationWhereActivated();
		// $data['city'] = $this->city_m->get();
		$this->template->load('frontend/template', 'frontend/about');
	}

	public function contact()
	{
		// $data['row'] = $this->model_siswa->getOrganizationWhereActivated();
		// $data['city'] = $this->city_m->get();
		$this->template->load('frontend/template', 'frontend/contact');
	}

	public function popular()
	{
		$data['popcity'] = $this->model_home->popularbycityAll();
		$this->template->load('frontend/template', 'frontend/bimbel-popular', $data);
	}

}
