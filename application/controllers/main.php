<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('index');
		$this->load->view('partials/footer');
	}
}

//end of main controller