<?php
Class Controller_Footer Extends Controller
{
	public function index()
	{
		$this->render('common/footer', $this->data);
	}
}