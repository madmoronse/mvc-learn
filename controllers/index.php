<?php
Class Controller_Index Extends Controller
{
	public function index()
	{

		$this->data['title'] = 'Главная страница';
		$home = $this->model('home');
		$this->data['students'] = $home->getData();


		$this->render('common/home', $this->data);
	}
}