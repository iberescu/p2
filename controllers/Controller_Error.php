<?php

class Controller_Error extends Controller {

	function __construct() 
	{
		parent::__construct();
	}
	function index($message = '') 
	{
		header("HTTP/1.0 404 Not Found");

		$this->loadModel('Error');
	
		if (!DEBUG_ENVIRONMENT)
		{
			$message = '';
		}
		$this->view->assign('title','404 Error')
				   ->assign('keywords','error,404')
				   ->assign('description','404 error')
				   ->assign('latest',$this->model->getLatest())
				   ->display('error/index');
	}
}