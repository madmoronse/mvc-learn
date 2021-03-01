<?php
class Controller
{
	public $model;
	public $view;

	public function render($view, $data = null)
	{
		extract($data);
		include 'views/' . $view . '.php.';

	}
}
