<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}

	public function index() {

		// variables
		$this->title = "Web Security Final Project";

		// load views in
		$this->load->view('header');
		$this->load->view('homepage');

	}

	public function documentation() {

		$documentation = $this->uri->segment(3);


		if ($documentation === "access_controls"){

			$this->title = "Access Controls";
			$this->load->view("header");
			$this->load->view('documentation/access_controls');
		}

		else if ($documentation === "sql_injection") {

			$this->title = "SQL Injection";
			$this->load->view("header");
			$this->load->view('documentation/sql_injection');
		}

		else if ($documentation === "session_hijacking") {
	
			$this->title = "Session Hijacking";
			$this->load->view("header");
			$this->load->view('documentation/session_hijacking');
		}	

		else {

			$this->title = "Overview";
			$this->load->view("header");
			$this->load->view('documentation/overview');		
		} 

	}

}