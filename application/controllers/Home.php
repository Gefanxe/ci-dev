<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()	{
		$this->load->view('home_index');
	}

	public function aboutus() {
		$this->load->view('home_aboutus');
	}

	public function test() {
		$this->load->model('friends_model');

		$data = array(
			"friends" => $this->friends_model->getAllFriends()
		);
		$this->load->view('home_test', $data);
	}
}
