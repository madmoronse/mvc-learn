<?php
Class Controller_Header Extends Controller
{
	public function index()
	{
		$this->render('common/header', $this->data);
	}
}