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
	<nav class="top-right open">
		<?php foreach ($category as $value): ?>	
		  <a class="disc <?php echo 'l' . $value['id']; ?>">
		    <div><?php echo $value['title']; ?></div>
		  </a>
  		<?php endforeach ?>
  <a class="disc l7 toggle">
    
  </a>
</nav>
    

    

    
