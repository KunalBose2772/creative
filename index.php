<?php
define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app');
define('PUBLIC_PATH', BASE_PATH . '/public');

// Defensive Base URL Detection
$script = $_SERVER['SCRIPT_NAME'];
$dir = str_replace('\\', '/', dirname($script));
$base_url = ($dir === '/' || $dir === '\\' || $dir === '.') ? '/' : rtrim($dir, '/') . '/';
define('BASE_URL', $base_url);

require_once APP_PATH . '/config/config.php';
require_once APP_PATH . '/core/Database.php';
require_once APP_PATH . '/core/Model.php';
require_once APP_PATH . '/core/MailEngine.php';
require_once APP_PATH . '/models/InquiryModel.php';
require_once APP_PATH . '/models/WorkModel.php';
require_once APP_PATH . '/models/ServiceModel.php';
require_once APP_PATH . '/models/TestimonialModel.php';
require_once APP_PATH . '/controllers/HomeController.php';
require_once APP_PATH . '/controllers/AdminController.php';

// Route detection focusing on everything after the base path
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = substr($requestUri, strlen(BASE_URL));
$uri = trim($uri, '/');

$controller = new HomeController();
$admin = new AdminController();

// Default static routes
switch ($uri) {
    case 'admin':
    case 'admin/dashboard':
        $admin->dashboard();
        break;
    case 'admin/services':
        $admin->services();
        break;
    case 'admin/services/edit':
        $admin->editService($_GET['id'] ?? 0);
        break;
    case 'admin/services/add':
        $admin->addService();
        break;
    case 'admin/inquiries':
        $admin->inquiries();
        break;
    case 'admin/showcase':
        $admin->showcase();
        break;
    case 'admin/testimonials':
        $admin->testimonials();
        break;
    case 'admin/login':
        $admin->login();
        break;
    case 'admin/logout':
        $admin->logout();
        break;
    case '':
    case 'home':
        $controller->index();
        break;
    case 'work':
        $controller->work();
        break;
    case 'about':
        $controller->about();
        break;
    case 'why-us':
        $controller->whyUs();
        break;
    case 'testimonials':
        $controller->testimonials();
        break;
    case 'process':
        $controller->process();
        break;
    case 'careers':
        $controller->careers();
        break;
    case 'contact':
        $controller->contact();
        break;
    default:
        // Service Detail Pattern: services/[slug]
        if (strpos($uri, 'services/') === 0) {
            $slug = substr($uri, 9);
            $controller->service($slug);
        } 
        // Work Detail Pattern: work/[slug]
        elseif (strpos($uri, 'work/') === 0) {
            $slug = substr($uri, 5);
            $controller->workDetail($slug);
        }
        // Dynamic Location Engine Check: [service]-in-[city]
        elseif (preg_match('/^(.+)-in-(.+)$/', $uri, $matches)) {
            $service = $matches[1];
            $city = $matches[2];
            $controller->locationService($service, $city);
        } else {
            http_response_code(404);
            $controller->index();
        }
        break;
}
