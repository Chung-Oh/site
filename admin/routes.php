<?php

if (resolve('/admin')) {
    echo 'Admin page';
} elseif (resolve('/admin/pages')) {
    echo 'Administração de Páginas';
} else {
    echo 'Página não encontrada.';
}
