<?php
Class Controller_Header Extends Controller
{
	public function index($data_child)
	{
		$this->render('common/header', $data_child);
	}
}