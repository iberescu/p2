<?php

class Controller_Generate extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		
		echo json_encode(array());
		exit;
	}
	
}