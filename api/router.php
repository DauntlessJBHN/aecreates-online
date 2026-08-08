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

switch ($request) {

    case '/underconstruction':
        $file = __DIR__ . '/underconstruction/index.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Under Construction file not found.";
        }
        break;

    case '/confirmation':
        $file = __DIR__ . '/confirmation/index.php';
        if (file_exists($file)) {
            include $file;
        } else {
            echo "Confirmation file not found.";
        }
        break;

    default:
        http_response_code(404);
        break;
}
?>