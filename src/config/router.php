<?php

namespace Config;

class Router
{
    public function match($url)
    {
        $routes = require 'routes.php';

        foreach ($routes as $pattern => $params) {
            if ($this->matchPattern($pattern, $url, $matches)) {
                return ['controller' => $params['controller'], 'action' => $params['action'], 'params' => $matches];
            }
        }

        return ['controller' => 'ErrorController', 'action' => 'error404', 'params' => []];
    }

    private function matchPattern($pattern, $url, &$matches)
    {
        $pattern = str_replace('/', '\/', $pattern);
        $pattern = '/^' . $pattern . '$/';

        if (preg_match($pattern, $url, $matches)) {
            array_shift($matches);
            return true;
        }
    
        return false;
    }
}

