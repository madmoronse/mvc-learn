<?php
ini_set('display_error', 1);
require_once('system/startup.php');

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$db->exec('SET CHARACTER SET utf8');


$router = new Router($registry);
$registry->set('router', $router);
$name = 'Sergo';
$registry->set('name', $name);


$router->setPath(SITE_PATH . 'controllers');
$router->start();