<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct() {

		parent::__construct();

	}

	public function validate_login($username, $password) {

		$session = md5($username);
		$query = $this->db->where(array('username' => $username, "password" => $password))->get("users");

		if ($query->num_rows() == 1) return $this->login($username);

		return false;
	}

	public function logged_in($session_id) {

		$query = $this->db->where(array('session_id' => $session_id, "logged_in" => true))->get("sessions");
	
		if ($query->num_rows() == 1) return true;

		return false;		
	}	

	public function login($username) {

		$insert_data = array("username" => $username, "session_id" => $username, "logged_in" => true);
		$this->db->insert("sessions", $insert_data);

		return md5($username);// this will return the valid usernames
	}

	public function logout($session_id) {

		$this->db->where(array("session_id"=>$session_id))->update("sessions", array("logged_in" => false));

		return true;//should update the user!
	}

	public function get_all_users() {

		$users = array();
		$query = $this->db->get("users");

		foreach ($query->result() as $row) 
			array_push($users, $row->username);

		return $users;
	}

	public function get_session_id($username) {

		$query = $this->db->where(array('username' => $username, 'logged_in' => true))->select('session_id')->get('sessions');

		if ($query->num_rows() == 1) return $query->row()->session_id;

		$this->db->delete('sessions', array('username' => $username));

		return false;

	}

	public function get_username($session_id) {

		$query = $this->db->where(array('session_id' => $session_id, 'logged_in' => true))->get('sessions');

		if ($query->num_rows() == 0) return false;

		return $query->row()->username;

	}

}