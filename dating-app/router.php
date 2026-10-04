<?php
/**
 * Local preview router.
 * Run:  php -S localhost:8000 router.php
 * Then open http://localhost:8000 in your browser.
 *
 * NOT uploaded to the server — local preview only.
 */

require_once __DIR__ . '/wp-mock.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

// Serve static files (css, images, js) directly
$static = __DIR__ . '/' . $uri;
if ($uri && file_exists($static) && !is_dir($static)) {
    return false; // let PHP built-in server handle it
}

// Route pages
$routes = [
    ''        => 'page-home.php',
    'home'    => 'page-home.php',
    'about'   => 'page-about.php',
    'contact' => 'page-contact.php',
    'help'       => 'page-help.php',
    'age-policy' => 'age-policy.php',
];

$page = $routes[$uri] ?? 'page-home.php';
$file = __DIR__ . '/' . $page;

if (file_exists($file)) {
    include $file;
} else {
    http_response_code(404);
    echo "<h1>404 – Page not found</h1>";
}
