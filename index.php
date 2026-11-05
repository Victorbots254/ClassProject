<?php
// index.php
// LR Bakery (Loaf & Rye) - Front Controller
// Student Project: Loren / Zihao Ye (ID: 270845446)
// Task 4: Website Design

// Let PHP built-in web server serve static files directly (CSS, JS, images)
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ($path !== '/' && file_exists(__DIR__ . $path)) {
        return false;
    }
}

require_once __DIR__ . '/data/products.php';

// Allowed routes
$validPages = [
    'home' => 'pages/home.php',
    'menu' => 'pages/menu.php',
    'story' => 'pages/story.php',
    'packaging' => 'pages/packaging.php',
    'contact' => 'pages/contact.php',
];

$currentPage = $_GET['page'] ?? 'home';

if (!array_key_exists($currentPage, $validPages)) {
    $currentPage = 'home';
}

// Page title map
$titles = [
    'home' => 'Loaf & Rye Bakery — Handcrafted Bread & Artisan Treats',
    'menu' => 'Daily Bakery Menu & Treats',
    'story' => 'Our Sourdough Story & Brand Heritage',
    'packaging' => 'Packaging Design & Gift Boxes (Task 3)',
    'contact' => 'Visit & Bakery Pre-Order',
];

$pageTitle = $titles[$currentPage] ?? 'LR Bakery';

// Assemble layout components
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
include __DIR__ . '/' . $validPages[$currentPage];
include __DIR__ . '/includes/footer.php';
