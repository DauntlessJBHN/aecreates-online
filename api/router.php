<?php
$is_local = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');
$base_url = $is_local ? '/aecreates.online/public' : '';

$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Strip local folder prefix if testing locally
$script_name = dirname($_SERVER['SCRIPT_NAME']);
if ($script_name !== '/' && strpos($request, $script_name) === 0) {
    $request = substr($request, strlen($script_name));
}

$request = rtrim($request, '/');
if ($request === '' || $request === '/api') {
    $request = '/';
}

ob_start();

switch ($request) {
    case '/':
        $file = __DIR__ . '/index.php'; // Put your home view inside a dedicated file
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Home page file not found.";
        }
        exit; // Crucial: stops execution here so it doesn't bleed into other cases

    case '/underconstruction':
        $file = __DIR__ . '/underconstruction/index.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Under Construction file not found.";
        }
        exit; // Crucial: stops execution here

    case '/confirmation':
        $file = __DIR__ . '/confirmation/index.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Confirmation file not found.";
        }
        exit; // Crucial: stops execution here

    default:
        http_response_code(404);
        echo "<h1>404 Page Not Found</h1>";
        exit;
}

// Capture only the matched page content
$page_content = ob_get_clean();
?>