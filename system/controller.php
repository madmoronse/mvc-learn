<?php
class Controller
{
	public $model;
	public $view;
	protected $data = array();

	protected $registry;
	
	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function __get($key) {
		return $this->registry->get($key);
	}

	public function __set($key, $value) {
		$this->registry->set($key, $value);
	}

	public function model($model)
   	{
	    require_once('models/model_'.$model.'.php');
	    $class_name = ucfirst('model_') . ucfirst($model);
	    return new $class_name;
	}
	public function render($view, $data = [], $child = [])
	{
			ob_start();
			extract($data);
			include SITE_PATH . 'views/' . $view . '.php.';
			$buffer = ob_get_contents();
		    ob_end_clean();

		    echo $buffer;
	}
}
