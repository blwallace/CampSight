<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Campground extends CI_Model {

	public function get_all()
	{
		$query = ' SELECT * FROM campgrounds';
		return $this->db->query($query) -> result_array();
	}

	public function add_campground($name)
	{
		$query = '	INSERT INTO CAMPGROUNDS (name)
					VALUES (?)';
		$values = array($name);
		return $this->db->query($query,$values);
	}

	public function update_campground($form,$id)
	{
		$query = 'UPDATE campgrounds SET name=?,state=?,ammenities=? WHERE id=?';
		$values = array($form['name'],$form['state'],$form['ammenities'],$id);
		return $this->db->query($query,$values);
	}

	public function get_campground($id)
	{
		$query = 'SELECT * FROM campgrounds WHERE id=?';
		$values = array($id);
		return $this->db->query($query,$values) -> result_array();
	}



}

/* End of file friend.php */
/* Location: ./application/models/friend.php */