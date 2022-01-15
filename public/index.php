<?php
$page = $_GET['p'] ?? 'home';
$page = strip_tags($page);
getPage(sprintf(__DIR__ . "/../%s.php", strtolower($page)));

function getPage(string $pageName): void {
    require file_exists($pageName) ? $pageName : __DIR__ . '/../404.php';
}


ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');

