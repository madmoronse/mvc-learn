<?php
Class Controller_Products Extends Controller
{
	public function getList($args)
	{
		$this->load->model('products');
		$category = $this->model_products->getCategory($args[0]);
		$this->data['title'] = $category['title'];

		$products = $this->model_products->getProducts($category['id']);

		foreach ($products as $result) {
			$this->data['products'][] = array (
				'id' => $result['id'],
				'title' => $result['title'],
				'description' => $result['description'],
				'price' => $result['price'],
				'category_id' => $result['category_id'],
				'image' => $result['image']
			);
		}

		$this->children = array (
			'header',
			'footer'
		);

		$this->render('products/products_list', $this->data);
	}
	public function getProduct($args)
	{
		echo $this->request->post['id'];
		$this->load->model('products');
		$this->data['product'] = $this->model_products->getProduct($args[0]);
		$this->data['title'] = $this->data['product']['title'];

		$this->children = array (
			'header',
			'footer'
		);

		$this->render('products/product', $this->data);
	}

	public function addToCart()
	{
		$json = array();

		$this->data['basket'] = $this->cart->get();

		if ($this->cart->add($this->request->post['id'])) {
			$this->cart->save();
			$json['total'] = count($this->cart->get());
		} else {
			$json['error'] = "Товар уже в корзине!";
		}

		header('Content-type: application/json');
		echo json_encode($json);
	}

	public function deleteToCart()
	{
		$json = array();

		if ($this->cart->delete($this->request->post['id'])) {
			$this->cart->save();
			$json['total'] = count($this->cart->get());
		} else {
			$json['error'] = 'Нет в корзине';
		}

		header('Content-type: application/json');
		echo json_encode($json);
	}
}

