<?php echo $header; ?>

<div class="products">
	<?php foreach ($products as $value): ?>
		<div class="product">
			<?php echo $value['title']; ?><br><br>
			<?php echo $value['description']; ?><br><br>
			<?php echo $value['price']; ?><br><br>
			<a href="#"><button style="color: black; padding: 5px;">Добавить в корзину</button></a>
		</div>
	<?php endforeach ?>
</div>

<?php echo $footer; ?>