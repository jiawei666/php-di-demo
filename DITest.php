<?php
require_once 'vendor/autoload.php';


$container = new DI\Container();

$userManager = $container->get('App\UserManager');
//
//
var_dump($userManager->register('957089263@qq.com', 'as'));