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
        <div class="social">
            <a href="#"><img src="image/icons/instagram.png" alt="инстаграм"></a>
            <a href="#"><img src="image/icons/whatsapp.png" alt="whatsapp"></a>
            <a href="#"><img src="image/icons/telegram.png" alt="telegram"></a>
        </div>
        <div class="logo">
            <img src="image/logo.png" alt="логотип">
        </div>
        <div class="callback">
            <a href="#"><button class="button">Заказать звонок</button></a>
        </div>
    </div>
    <div class="menu">
        <ul>
            <?php foreach ($category as $item) {?>
                <a href="#"> <li> <?php echo $item['title']; ?> </li></a>
            <?php }?>
            <li>Отзывы</li>
            <li>Контакты</li>
        </ul>
    </div>
</div>
    
