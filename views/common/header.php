<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="https://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
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
	<div class="nav">
	<div class="header">
		<div class="logo">
			<img src="../../image/logo.png">
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
			<img src="../../image/icons/basket_96252.png" width="18" height="18">
			<span>0</span>
		</div>
	</div>
</div>
</div>
<div class="social">
	<img src="../../image/icons/telegram.png">
	<img src="../../image/icons/instagram.png">
	<img src="../../image/icons/whatsapp.png">
</div>


