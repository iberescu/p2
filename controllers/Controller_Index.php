<?php

class Controller_Index extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		
		$this->view->assign('title','')
				   ->assign('keywords','')
				   ->assign('description','')
				   ->display('index/index');
	}
	
}