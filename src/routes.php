<?php
$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) {
    $controller = 'index';
}

require "./controllers/{$controller}.controller.php";