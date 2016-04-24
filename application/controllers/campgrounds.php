<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campgrounds extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('campground');
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$values['grounds'] = $this->campground->get_all();

		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('partials/campground_search');
		$this->load->view('partials/campground_list',$values);
		$this->load->view('partials/script');
		$this->load->view('partials/footer');
	}

	public function view($id)
	{
		$values = $this->campground->get_campground($id)[0];
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('partials/script');
		$this->load->view('partials/campsites',$values);
		$this->load->view('partials/footer');
	}

	public function reserve()
	{
		$form = array(
						'id' => $this->input->post('id'),
						'startdate' => $this->input->post('startdate'),
						'enddate' => $this->input->post('enddate')
					);
	}

}

//end of main controller