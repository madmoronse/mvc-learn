<?php
Class Controller_Header Extends Controller
{
	private $data_child;
	public function index($data_child)
	{
		$this->data_child = $data_child;
		$this->load->model('products');
		$this->data_child['category'] = $this->model_products->getCategories();


		$this->data_child['countToCart'] = count($this->cart->get());

		$this->getCart();

		$this->render('common/header', $this->data_child);
	}

	public function getCart()
	{
		$json = array();
		$products_id = $this->cart->get();
		$this->load->model('products');

		foreach ($products_id as $value) {
			$product = $this->model_products->getProduct($value);
			foreach ($product as $result) {
				$json['success'][] = array(
				'id' 	=> $result['id'],
				'title' => $result['title'],
				'price' => $result['price'],
				'image' => $result['image']
				);
			}
		}

		echo json_encode($json, JSON_UNESCAPED_UNICODE);

	}
}