<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper(array('form'));
		$data['page_title'] = "login";
		$this->load->view('templates/header', $data);
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}
}
