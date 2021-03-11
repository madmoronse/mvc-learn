<?php echo $header; ?>

<div class="products">
	<?php foreach ($product as $value): ?>
		<div class="product">
			<?php echo $value['title']; ?><br><br>
			<?php echo $value['description']; ?><br><br>
			<?php echo $value['price']; ?><span> руб/кг</span><br><br>
			<a onclick="addToCart(<?php echo $value['id']; ?>);"><button style="color: black; padding: 5px;">Добавить в корзину</button></a>
		</div>
	<?php endforeach ?>
</div>


<div id="popup" class="popup">
    <div class="popup_body">
        <div class="popup_content">
            <div class="popup_text">
                Товар добавлен в корзину!
            </div>
            <div class="popup_close close-popup">Закрыть</div>
        </div>
    </div>
</div>
<?php echo $footer; ?>