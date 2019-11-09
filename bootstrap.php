<?php

require __DIR__ . '/config.php';
require __DIR__ . '/src/error-handler.php';
require __DIR__ . '/src/connection.php';
require __DIR__ . '/src/render.php';
require __DIR__ . '/src/resolve-route.php';

// echo '<pre>';
// print_r($result[0]->name);
// die('<br>Fim Bootstrap...');

if (resolve('/admin/?(.*)')) {
    require __DIR__ . '/admin/routes.php';
} elseif (resolve('/(.*)')) {
    require __DIR__ . '/app/routes.php';
} else {
    http_response_code(404);
    echo 'Página não encontrada.';
}
