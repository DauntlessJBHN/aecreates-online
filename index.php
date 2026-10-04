<?php
// Forward execution to the API handler without recursive requires
$_GET['url'] = $_SERVER['REQUEST_URI'];
require_once __DIR__ . '/api/index.php';
?>