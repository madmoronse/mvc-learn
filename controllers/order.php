<?php
Class Controller_Order Extends Controller
{
	public function newOrder()
	{
		$json = array();

		$data = array(
			'email' => $this->request->post['email'],
			'name' 	=> $this->request->post['name'],
			'phone' => $this->request->post['phone']
		);

		if ($this->telegram->send($data)) {
			$json['success'] = 'Всё отлично';
		} else {
			$json['error'] = 'Всё плохо';
 		}

 		echo json_encode($json, JSON_UNESCAPED_UNICODE);
	}
}