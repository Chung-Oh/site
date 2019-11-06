<?php

function resolve($route) {
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if (preg_match($route, $path, $params)) {
        return $params;
    }

    return false;
}

if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')) {
    require __DIR__ . '/app/routes.php';
} else {
    echo 'Página não encontrada.';
}

// echo '<pre>';
// print_r($_SERVER);
// die('<br>Fim...');
