<?php echo $header; ?>

<div class="products">
	<?php foreach ($products as $value): ?>
		<a href="/products/getProduct/<?php echo $value['id']; ?>" class="product-link">
			<div class="product">
				<div class="product__image"><img src="/image/products/<?php echo $value['image']; ?>" width="128" height="128"></div>
				<div class="product__title"><?php echo $value['title']; ?></div>
				<div class="product__price"><?php echo $value['price']; ?><span> руб/кг</span></div>
			</div>
		</a>
	<?php endforeach ?>
</div>

<?php echo $footer; ?>

<!-- <div class="product__title"><?php // echo $value['description']; ?></div> -->