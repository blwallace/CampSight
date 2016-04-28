<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation extends CI_Model {

	public function add_reservation($data)
	{
		$query = ' INSERT INTO reservations(site_id,user_id,start_date,end_date,created_at)
					VALUES (?,?,?,?,Now())';
		$values = array($data['site_id'],$data['user_id'],$data['startdate'],$data['enddate']);
		return $this->db->query($query,$values);
	}

	public function get_reservations_user($id)
	{
		$query = 'select campgrounds.name as campground, sites.name, reservations.start_date, reservations.end_date, campgrounds.id
					from sites, campgrounds, reservations, users
					where campgrounds.id = sites.campground_id
					and reservations.site_id = sites.id
					and reservations.user_id = users.id
					and users.id = ?';
		$values = array($id);
		return $this->db->query($query,$values)->result_array();


	}



}

/* End of file friend.php */
/* Location: ./application/models/friend.php */