<?php
class LoadController{
	public function __construct($url)
	{
		$this->location = explode('/',trim($url, '/'));
	}
	public function error()
	{
		$controller = new Controller_Error();
		$controller->index();
		return false;
	}
	public function load()
	{
		
		if (empty($this->location[0]))
		{
			$controller = new Controller_Index();
			$controller->index();
			return $this;
		}
		
		$controller_name = ucwords($this->location[0]);
		$class_name = 'Controller_' . $controller_name;
		
		//find controller
		$file = 'controllers/' . $class_name . '.php';
		if (!file_exists($file))
		{
			$class_name = 'Controller_Company';
			$file = 'controllers/Controller_Company.php';
			$this->location[1] = $this->location;
			$controller = new $class_name;
			
		} 
		else
		{
			$controller = new $class_name;
			$controller->loadModel($controller_name);
		}
		// calling methods
		if (!empty($this->location[1]) && !empty($this->location[2]))
		{
			$controller_method = $this->location[1];
			$controller_options = $this->location[2];
			
			if (method_exists($controller, $controller_method)) 
			{
				$controller->{$controller_method}($controller_options);
			} 
			else {
				echo 'Controller method not found'; exit;
			}
		} 
		else 
		{
			if (!empty($this->location[1]))
			{
				$method_option = $this->location[1];
				if (!is_array($method_option) && method_exists($controller, $method_option)) 
				{
					$controller->{$method_option}();
				}
				else 
				{
					$controller->index($method_option);
				}
			}
			else 
			{
				$controller->index();
			}
		}
	}
}