<?php
Class Controller_Index Extends Controller
{
	public function index()
	{
		$this->data['title'] = 'Главная страница';
		$this->model = new Model_Home();
		$this->data['students'] = $this->model->getData();


		$this->render('common/home', $this->data);
	}
}