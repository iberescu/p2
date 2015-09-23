<?php

class Controller_Index extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		
		$this->view->assign('title','xkcd Password Generator')
				   ->assign('keywords','xkcd,harvard')
				   ->assign('description','xkcd Password Generator - by Berescu Ionut')
				   ->display('index/index');
	}
	
}