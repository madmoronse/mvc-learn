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

	protected function getCart()
	{
		$products_id = $this->cart->get();
		$this->load->model('products');

		foreach ($products_id as $value) {
			$product = $this->model_products->getProduct($value);
			foreach ($product as $result) {
				$this->data_child['products_in_cart'][] = array(
				'id' 	=> $result['id'],
				'title' => $result['title'],
				'price' => $result['price'],
				'image' => $result['image']
				);
			}
		}

		// $json = $this->data_child['products_in_cart'];

		// header('Content-type: application/json');
		// echo json_encode($json);
	}
}