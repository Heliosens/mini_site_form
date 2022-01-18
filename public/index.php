<?php

$title = isset($_GET['title']) ? $_GET['title'] : 'home';
$page = strip_tags($title);

require __DIR__ . '/../partials/header.php';

require __DIR__ . '/../' . $title . '.php';

require __DIR__ . '/../partials/footer.php';

