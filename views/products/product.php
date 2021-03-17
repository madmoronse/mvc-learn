<?php echo $header; ?>

<div class="products">
	<?php foreach ($product as $value): ?>
		<div class="product">
			<div class="product__image"><img src="/image/products/<?php echo $value['image']; ?>" width="128" height="128"></div>
			<div class="product__title"><?php echo $value['title']; ?></div>
			<div class="product__title"><?php echo $value['description']; ?></div>
			<div class="product__title"><?php echo $value['price']; ?><span> руб/кг</span></div>
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