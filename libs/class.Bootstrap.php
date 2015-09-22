<?php
class Bootstrap{
	static public function init()
	{
		spl_autoload_register(array('Bootstrap','loader'));
		require_once(APPLICATION_PATH.'/config/config.php');
		$app = new Bootstrap();
	}
	static public function loader($className)
	{
		$path = explode('_',$className);

		if (count($path) <= 1)
		{
			if (file_exists(APPLICATION_PATH .'/libs/class.'.$className.'.php'))
			{
				require_once (APPLICATION_PATH .'/libs/class.'.$className.'.php');
			}
		}
		else
		{
			switch(strtolower($path[0]))
			{
				case "controller":
					require_once (APPLICATION_PATH .'/controllers/'.$className.'.php');
				break;
			}
		}
	}
	static public function xxa($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
	static public function xxb($var)
	{
		echo "<pre>";
		print_r($var);
		echo "</pre>";
		exit;
	}
	static public function qqa($var)
	{
		if ($_SERVER['REMOTE_ADDR'] == DEBUG_IP)
		{
			echo "<pre>";
			print_r($var);
			echo "</pre>";
		}
	}	
	static public function qqb($var)
	{
		if ($_SERVER['REMOTE_ADDR'] == DEBUG_IP)
		{	
			echo "<pre>";
			print_r($var);
			echo "</pre>";
			exit;
		}
	}
	private function error($message)
	{
		$controller = new Controller_Error();
		$controller->index($message);
		return false;
	}
	public function __construct()
	{
		$this->enableDebug()->load();
	}
	public function enableDebug()
	{
		if (DEBUG_ENVIRONMENT)
		{
			error_reporting(E_ALL);
			ini_set('display_errors',1);		
		}
		return $this;
	}
	public function load()
	{
		$url = isset($_GET['location']) ? $_GET['location'] : null;
		$controller = new LoadController($url);
		try{
			$controller->load();
		}
		catch(LibException $e)
		{
			$this->error($e->getMessage());
		}
	}
}
