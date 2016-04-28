<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campgrounds extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('campground');
		$this->load->model('site');
		$this->output->enable_profiler();
	}

	public function index()
	{

		$navbar = array('login'=>'Login');
		if(isset($this->session->userdata['user_id'])){
			$navbar['login'] = $this->session->userdata['user_name'];
		}		
		$values['grounds'] = $this->campground->get_all();

		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$navbar);
		$this->load->view('partials/campground_search');
		$this->load->view('partials/campground_list',$values);
		$this->load->view('partials/script');
		$this->load->view('partials/footer');
	}

	public function view($id)
	{
		$navbar = array('login'=>'Login');
		if(isset($this->session->userdata['user_id'])){
			$navbar['login'] = $this->session->userdata['user_name'];
		}		
		$values['campground'] = $this->campground->get_campground($id)[0];
		$values['sites'] = $this->site->get_all_campground($id);
		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$navbar);
		$this->load->view('partials/scriptBook',$values);
		$this->load->view('partials/campsites',$values);
		$this->load->view('partials/footer');
	}

	public function confirmation()
	{
		$navbar = array('login'=>'Login');
		if(isset($this->session->userdata['user_id'])){
			$navbar['login'] = $this->session->userdata['user_name'];
		}		
		$values['grounds'] = $this->campground->get_all();

		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$navbar);
		$this->load->view('partials/confirmation');
		$this->load->view('partials/script');
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