<?php

class Player extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('player_model');
	}

	public function index()
	{
		$data['players'] = $this->player_model->get_player_by_name('Drew Brees');

		$data['page_title'] = "Player";
		$this->load->view('templates/header', $data);
		$this->load->view('player/test', $data);
		$this->load->view('templates/footer');

	}

	public function view($slug)
	{
		$data['players'] = $this->player_model->get_players(urldecode($slug));

		$data['page_title'] = "Player";
		$this->load->view('templates/header', $data);
		$this->load->view('player', $data);
		$this->load->view('templates/footer');
	}

	


}