<?php
switch ($link[2]) {
    case '':
        require __DIR__ . $viewDir . 'home.php';
        break;
    case 'login':
        require __DIR__ . $viewDir . 'login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
