<?php

class Player_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_players($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('players');
			return $query->result_array();
		}

		$query = $this->db->get_where('players', array('player_name' => $slug));
		return $query->row_array();
	}

	public function get_player_by_name($player_name)
	{
		$query = $this->db->where('player_name', $player_name);
		return $query->result_array();
	}

	public function get_search() {
		$match = $this->input->post('search');
		
	}
}