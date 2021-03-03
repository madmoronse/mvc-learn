<?php
Class Controller_Index Extends Controller
{
	public function index()
	{

		$this->data['title'] = 'Главная страница';
	 	$this->model('home');
		$this->data['students'] = $this->model_home->getData();

		$this->children = array (
			'header',
			'footer'
		);
		
	
		$this->render('common/home', $this->data);	
	}
}