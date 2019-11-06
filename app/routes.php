<?php

if (resolve('/')) {
    render('app/home', 'app');
} elseif (resolve('/contact')) {
    render('app/contact', 'app');
} else {
    echo 'Página não encontrada.';
}
