<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$navbar = array('login'=>'Login');
		if(isset($this->session->userdata['user_id'])){
			$navbar['login'] = $this->session->userdata['user_name'];
		}

		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$navbar);
		$this->load->view('index');
		$this->load->view('partials/footer');
	}
}

//end of main controller