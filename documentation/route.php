<?php
$request = $_SERVER['REQUEST_URI'];
$link = explode("/", $request);
switch ($link[1]) {
    case '':
        require 'documentation/views/home.php';
        break;
    case 'login':
        require 'documentation/views/login.php';
        break;
    default:
        http_response_code(404);
        require 'documentation/views/404.php';
}
