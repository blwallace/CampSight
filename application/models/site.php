<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Model {

	public function get_all()
	{
		$query = ' SELECT * FROM sites';
		return $this->db->query($query) -> result_array();
	}

	public function get_all_campground($id)
	{
		$query = ' SELECT * FROM sites WHERE ? = campground_id';
		return $this->db->query($query,$id) -> result_array();
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

	public function add_site($campground_id,$name)
	{
		$query = '	INSERT INTO SITES (campground_id,name)
					VALUES (?,?)';
		$values = array($campground_id,$name);
		return $this->db->query($query,$values);
	}



}

/* End of file friend.php */
/* Location: ./application/models/friend.php */