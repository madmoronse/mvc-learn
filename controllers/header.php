<?php
Class Controller_Header Extends Controller
{
	private $data_child;
	public function index($data_child)
	{
		$this->data_child = $data_child;
		$this->model('products');
		$this->data_child['category'] = $this->model_products->getCategory();
		
		$this->render('common/header', $this->data_child);
	}
}