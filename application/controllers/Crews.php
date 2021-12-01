<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Crews extends CI_Controller {

	public function __construct() {
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();
	}

	public function index() {
		$this->load->model('crew');
		$crews = $this->crew->getCrew();
		var_dump($crews);
		$this->load->view('welcome_message');
	}

	public function addCrew() {

		$data = array(
		'data' => array(
		'text' => 'Error 200',
		'type' => 'danger'
		)
		);

		return $this->output
//		->set_content_type('application/json')
//		->set_status_header(200)
		->set_output(json_encode($data));


//		echo json_encode($data);
	}





}
