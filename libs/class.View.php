<?php
class View {
	public $data = array();

	public function __construct() 
	{
		
	}
	private function loadView($name)
	{
		if (file_exists(APPLICATION_VIEW_PATH . $name . '.tpl'))
		{
			require_once(APPLICATION_VIEW_PATH . $name . '.tpl');
		}
		else {
			echo 'View file not found: '.$name;
			exit;
		}
		return $this;
	}
	private function clean($text)
	{
		return trim(strtolower(str_replace(' ' ,'-',$text)));
	}
	public function assign($field,$value)
	{
		$this->{$field} = $value;
		return $this;
	}
	public function display($name, $noInclude = false)
	{
		echo $this->render($name, $noInclude = false);
		return $this;
	}
	public function render($name, $noInclude = false)
	{
		ob_start();
		if ($noInclude)
		{
			$this->loadView($name);
		}
		else 
		{
			$this->loadView('header')->loadView($name)->loadView('footer');
		}
		$view = ob_get_contents();
		ob_end_clean();
		return $view;
	}
}