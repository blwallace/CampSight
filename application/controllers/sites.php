<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site');
		$this->load->model('reservation');
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$site = $this->site->get_site($id);
		$value['json'] = json_encode($site);
		$this->load->view('json/site',$value);
	}

	public function single($id)
	{
		$site = $this->site->get_site($id)[0];
		$value['json'] = json_encode($site);
		$this->load->view('json/site',$value);
	}

	public function book()
	{
		$site_id = $this->input->post('site-id-selected');
		$site_start = $this->input->post('startdate');
		$site_end = $this->input->post('enddate');
		$user_id = $this->session->userdata('user_id');
		$values = array(
			'site_id' => $site_id,
			'startdate' => $this->unixToMySQL($site_start),
			'enddate' => $this->unixToMySQL($site_end),
			'user_id' => $user_id
		);
		$this->reservation->add_reservation($values);
		redirect('/reservations');
	}

	function unixToMySQL($timestamp)
	{
	    return date('Y-m-d H:i:s', strtotime($timestamp));
	}



}

//end of main controller