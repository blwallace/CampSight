<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservations extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('site');
		$this->load->model('reservation');
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$navbar = array('login'=>'Login');
		if(isset($this->session->userdata['user_id'])){
			$navbar['login'] = $this->session->userdata['user_name'];
		}
		else{
			redirect('');
		}

		$id = $this->session->userdata('user_id');
		$values['reservations'] = $this->reservation->get_reservations_user($id);
		$reservations = $values['reservations'];
		// 
		for($i=0;$i<count($reservations);$i++){
			// print(($reservations[$i]['start_date']));
			$phpdate = strtotime($reservations[$i]['start_date']);
			$reservations[$i]['start_date'] = (date( 'D m/d/y', $phpdate ));
			$phpdate = strtotime($reservations[$i]['end_date']);
			$reservations[$i]['end_date'] = (date( 'D m/d/y', $phpdate ));
			// print(strtotime($reservations[$i]['start_date']));
		}
		
		$values['reservations'] = $reservations;

		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$navbar);
		$this->load->view('partials/reservation_list',$values);
		$this->load->view('partials/footer');		
		
	}



}

//end of main controller