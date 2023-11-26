<?php

use Controller\Automobile;

$routes = [];

// Rotas Automobile
$routes['/'] = ['controller' => Automobile::class, 'action' => 'index'];
$routes['/automobile'] = ['controller' => Automobile::class, 'action' => 'index'];
$routes['/automobile/create'] = ['controller' => Automobile::class, 'action' => 'create'];
$routes['/automobile/store'] = ['controller' => Automobile::class, 'action' => 'store'];
$routes['/automobile/update'] = ['controller' => Automobile::class, 'action' => 'update'];
$routes['/automobile/edit/([a-zA-Z0-9-]+)'] = ['controller' => Automobile::class, 'action' => 'edit'];
$routes['/automobile/delete/([a-zA-Z0-9-]+)'] = ['controller' => Automobile::class, 'action' => 'delete'];

$routes['*'] = ['controller' => 'ErrorController', 'action' => 'error404'];

return $routes;
