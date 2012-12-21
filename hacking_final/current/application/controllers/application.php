<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Application extends CI_Controller {

	public function __construct() {

		parent::__construct();

		$this->title = "Application";
		$this->load->model('user');
	}

	public function index() {

		return $this->login_get();
	}

	public function login() {

		return $this->login_get();

	}

	public function login_get() {

		$this->title = "Application Login";
		$this->load->view('header');//basic header
		$this->load->view('login');//login form
	}

	public function login_post() {

		$this->title = "Login";

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$valid = $this->user->validate_login($username, $password);

		if ($valid) $session_id = $this->user->get_session_id($username);//session id

		if ($valid && $session_id) {

			echo $session_id;
			$this->session->set_userdata(array("session_id" => $session_id));
			redirect('application/logged_in');

		}//return the logged in page


		// reponsible for showing all users!
		$this->load->view('header');
		$this->users = $this->user->get_all_users();//gets all the current users and loads them in
		$this->load->view('login');

	}

	public function logged_in() {

		// responsible for looking at a logged in user  -- if the user is logged in will show the logged in section
		// if not will redirect to the user page
		$this->username = $this->user->get_username($this->session->userdata('session_id'));

		$this->load->view('header');
		$this->load->view('logged_in_user');
	}

	public function logout() {

		$session_id = $this->session->userdata('session_id');
		$this->user->logout($session_id);

		$this->load->view('header');
		$this->load->view('logout');

	}



}