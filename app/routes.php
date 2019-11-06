<?php

if (resolve('/')) {
    echo 'Home page';
} elseif (resolve('/contact')) {
    echo 'Página de contato.';
} else {
    echo 'Página não encontrada.';
}
