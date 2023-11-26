<?php

namespace Utils;

class View
{
    public static function forge($view, $data = [])
    {
        $viewFile = __DIR__ . "/../classes/view/$view.php";

        if (!file_exists($viewFile)) {
            header('HTTP/1.0 404 Not Found');
            self::forge('http.error404.php');
        }

        extract($data);

        include __DIR__ . "/../views/template.php";
    }
}
