<?php

if (resolve('/')) {
    render('app/home', 'app');
} elseif (resolve('/contact')) {
    render('app/contact', 'app');
} else {
    http_response_code(404);
    echo 'Página não encontrada.';
}
