<?php

require_once '../vendor/autoload.php';

use Config\Router;

$router = new Router();

$url = $_SERVER['REQUEST_URI'];

$url = strtok($url, '?');

$routeInfo = $router->match($url);

$class = $routeInfo['controller'];

$obj = new $class;

$action = $routeInfo['action'];

$obj->$action(...$routeInfo['params']);
