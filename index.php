<?php
define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app');
define('PUBLIC_PATH', BASE_PATH . '/public');

require_once APP_PATH . '/controllers/HomeController.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$uri = preg_replace('/^cr\/?/', '', $uri);

$controller = new HomeController();

switch ($uri) {
    case '':
    case 'home':
        $controller->index();
        break;
    default:
        http_response_code(404);
        $controller->index();
        break;
}
