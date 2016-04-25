<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('campground');
		$this->load->model('site');
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('partials/admin');
	}

	// Add, edit and delete campsites
	public function add_campground()
	{
		$name = "test_site_2";
		$this->campground->add_campground($name);
	}

	public function update_campground()
	{
		$form = array(
						'id' => $this->input->post('id'),
						'name' => $this->input->post('name'),
						'ammenities' => $this->input->post('ammenities'),
						'state' => $this->input->post('state')
					);
		
		$id = $this->input->post('id');

		$this->campground->update_campground($form,$id);
	}

	public function add_site()
	{
		for($i = 0; $i < 8; $i++){
			for($j = 1; $j < 11; $j++){
				$this->site->add_site($i,$j);
			}
		}
	}
}

//end of main controller