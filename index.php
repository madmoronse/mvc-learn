<?php
ini_set('display_error', 1);
require_once('system/startup.php');

$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$db->exec('SET CHARACTER SET utf8');


$router = new Router($registry);
$registry->set('router', $router);

$loader = new Loader($registry);
$registry->set('load', $loader);

$request = new Request();
$registry->set('request', $request);

$response = new Response();
$registry->set('response', $response);

$cart = new Cart();
$registry->set('cart', $cart);


$db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$registry->set('db', $db);

$router->setPath(SITE_PATH . 'controllers');
$router->start();