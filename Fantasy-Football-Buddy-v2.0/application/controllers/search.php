<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper(array('form'));

		$data['page_title'] = "Search";
		$this->load->view('templates/header', $data);
		$this->load->view('search', $data);
		$this->load->view('templates/footer');
	}


}