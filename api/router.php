<?php
// 1. Detect if running locally or on Vercel
$is_local = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');

// Set base URL to match your local XAMPP project root folder name
$base_url = $is_local ? '/aecreates.online/public' : '';
?>