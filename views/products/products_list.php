<?php echo $header; ?>

<div class="products">
	<?php foreach ($products as $value): ?>
		<a href="/products/getProduct/<?php echo $value['id']; ?>" style="color: black; text-decoration: none;"><div class="product">
			<?php echo $value['title']; ?><br><br>
			<?php echo $value['description']; ?><br><br>
			<?php echo $value['price']; ?><span> руб/кг</span><br><br>
			<a href="#"><button style="color: black; padding: 5px;">Добавить в корзину</button></a>
		</div></a>
	<?php endforeach ?>
</div>

<?php echo $footer; ?>