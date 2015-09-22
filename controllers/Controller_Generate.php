<?php

class Controller_Generate extends Controller {

	public function __construct() {
		parent::__construct();
	}
	private function _validate()
	{
		
			
	}
	private function _loadDatabase()
	{
		return explode("\n",file_get_contents(APPLICATION_PATH.'/db/words.db'));
	}
	private function _createPass($database)
	{
		$separator = $_POST['separator'];
		$words_count = $_POST['minWords'];		
		$selected = array_rand($database,$words_count);
		for ($i = 0; $i < count($selected); $i ++)
		{
			$result[] = trim($database[$selected[$i]]);
		}
		return implode($separator,$result);
	}
	
	public function index() {
		
		//validate request
		$this->_validate();
		
		//load database
		$database = $this->_loadDatabase();
		
		//create password
		$result = $this->_createPass($database);
		
		//append number
		if (isset($_POST['appendNumbers']) && $_POST['appendNumbers']) $result .= rand(1,9);
		
		//append special char
		if (isset($_POST['addSpecial']) && $_POST['addSpecial']) $result .= '@';

		//upercase
		if (isset($_POST['firstUpper']) && $_POST['firstUpper']) $result = ucwords($result);
		
		echo json_encode(array('result' => $result));
		exit;
	}
	
}