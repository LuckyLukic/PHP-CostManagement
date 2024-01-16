<?php
// ini_set('memory_limit', '255M');
// ini_set('display_errors', 1);

// echo ini_get('memory_limit');

// phpinfo();

$app = include __DIR__ . '/source/App/bootstrap.php';

$app->run();