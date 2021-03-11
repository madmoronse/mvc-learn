<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <title> <?php echo $title; ?> </title>
</head>
<body>
	<nav class="top-right open" style="display: none;">
		<?php foreach ($category as $value): ?>
		  <a class="disc <?php echo 'l' . $value['id']; ?>">
		    <div><?php echo $value['title']; ?></div>
		  </a>
  		<?php endforeach ?>
		<a class="disc l7 toggle">
		</a>
	</nav>
<div id="head">
	<div class="header">
		<div class="logo">
			<a href="/"><img src="../../image/logo.png"></a>
		</div>
		<div class="menu">
			<ul>
				<?php foreach ($category as $value): ?>
					<a href="#">
						<li><?php echo $value['title']; ?></li>
					</a>
				<?php endforeach ?>
					<a href="#">
						<li>Отзывы</li>
					</a>
					<a href="#">
						<li>Контакты</li>
					</a>
			</ul>
		</div>
		<div class="cart">
			<a onclick="popupCartOpen();"><img src="../../image/icons/basket_96252.png" width="18" height="18"></a>
			<span id="cart-total"><?php echo $countToCart; ?></span>
		</div>
	</div>
</div>
<div class="social" style="display: none;">
	<img src="../../image/icons/telegram.png">
	<img src="../../image/icons/instagram.png">
	<img src="../../image/icons/whatsapp.png">
</div>
<div id="cart" class="popup">
    <div class="popup_body">
        <div class="popup_content">
        	<?php if (isset($products_in_cart)) {?>
	        	<?php foreach ($products_in_cart as $value): ?>
		        	<div>
		        		<img src="/image/products/<?php echo $value['image']; ?>" width="64" height="64">
		        		<?php echo $value['title']; ?>
		        		<?php echo $value['price']; ?>
		        		<a onclick="deleteToCart(<?php echo $value['id']; ?>);"><button style="color: black; padding: 5px;">X</button></a>
		        	</div>
		        <?php endforeach ?>
	            <form>
	            	<input type="text" name="name">
	            	<input type="text" name="email">
	            	<input type="text" name="phone">
	            </form>
        	<?php } else { ?>
        		<div class="popup-text">
        			Корзина пуста!
        		</div>
        	<?php } ?>
            <div class="popup_close close-popup">Закрыть</div>
        </div>
    </div>
</div>



