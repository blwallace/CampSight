<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site');
		$this->output->enable_profiler();
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

}

//end of main controller