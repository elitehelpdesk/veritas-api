<?php

class Crew extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getCrew() {
		$crews = $this->db->from('crew')
		->limit(10)
		->get()->result();

		return $crews;
	}

}
