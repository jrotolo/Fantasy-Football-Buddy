<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * Renders the home page.
	 */
	public function index()
	{
		$data['page_title'] = "Home";
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}

	public function stats()
	{
		$data['page_title'] = "Stats";
		$this->load->view('templates/header', $data);
		$this->load->view('stats', $data);
		$this->load->view('templates/footer');
	}

	public function player()
	{
		$data['page_title'] = "Player";
		$this->load->view('templates/header', $data);
		$this->load->view('player', $data);
		$this->load->view('templates/footer');
	}

	public function schedule()
	{
		$data['page_title'] = "Schedule";
		$this->load->view('templates/header', $data);
		$this->load->view('schedule', $data);
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$data['page_title'] = "Contact";
		$this->load->view('templates/header', $data);
		$this->load->view('contact', $data);
		$this->load->view('templates/footer');
	}

	public function userPage()
	{
		if($this->session->userdata('logged_in'))
	   {
	     $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['username'];
	     $data['page_title'] = "User Page";
	     $this->load->view('templates/header', $data);
	     $this->load->view('home_view', $data);
	     $this->load->view('templates/footer');
	   }
	   else
	   {
	     //If no session, redirect to login page
	     redirect('login', 'refresh');
	   }
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
