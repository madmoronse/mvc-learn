<?php echo $header; ?>

<div class="products">
	<?php foreach ($products as $value): ?>
		<a href="/products/getProduct/<?php echo $value['id']; ?>" class="product-link"><div class="product">
			<?php echo $value['title']; ?><br><br>
			<?php echo $value['description']; ?><br><br>
			<?php echo $value['price']; ?><span> руб/кг</span><br><br>
		</div></a>
	<?php endforeach ?>
</div>

<?php echo $footer; ?>