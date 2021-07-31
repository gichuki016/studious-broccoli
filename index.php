<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '':
    case '/dashboard':
    case '/' :
        require __DIR__ . '/landing-page.php';
        break;
    case '/login' :
        require __DIR__ . '/login.php';
        break;
    case '/register' :
    case '/signup':
        require __DIR__ . '/test2.php';
        break;
    case '/profile':
        require __DIR__.'/profile.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/errors/404.php';
        break;
}
