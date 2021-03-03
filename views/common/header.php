<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title> <?php echo $title; ?> </title>
</head>
<body>
<div id="header">
    <div class="top">
        <div class="social"></div>
        <div class="logo"></div>
        <div class="callback"></div>
    </div>
    <div class="menu">
        <ul>
            <?php foreach ($category as $item) {?>
                <a href="#"> <li> <?php echo $item['title']; ?> </li></a>
            <?php }?>
        </ul>
    </div>
</div>
    
