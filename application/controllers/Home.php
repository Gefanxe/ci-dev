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

	public function contact() {
		$data = array(
			'result' => FALSE
		);
		$this->load->view('home_contact', $data);
	}

	public function docontact() {
		$this->load->model('stack_model');
		if ($this->input->method() == 'post') {
			$ipt = $this->input->post();
			$result = $this->stack_model->saveContact($ipt);

			$data = array(
				'result' => $result
			);

			$this->load->view('home_contact', $data);
		} else {
			redirect('/home/contact');
		}
	}

	// 測試
	public function test() {
		$this->load->model('friends_model');

		$data = array(
			"friends" => $this->friends_model->getAllFriends()
		);
		$this->load->view('home_test', $data);
	}
}
