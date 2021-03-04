<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <title> <?php echo $title; ?> </title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    	<div class="container">
    		<a href="#" class="navbar-brand">Пекарня</a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarContent">
    			<ul class="navbar-nav ml-auto">
    				<?php foreach($category as $item) { ?>
	    				<li class="nav-item">
	    					<a href="" class="nav-link"><?php echo $item['title']; ?></a>
	    				</li>
    				<?php } ?>
    			</ul>
    		</div>
    	</div>
    </nav>




