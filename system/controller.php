<?php
class Controller
{
	public $model;
	public $view;

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
