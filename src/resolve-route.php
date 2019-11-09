<?php

declare(strict_types=1);

/**
 * Handle route and validate with regular expression
 * 
 * @param string $route
 * 
 * @return mixed
 */
function resolve(string $route)
{
    $path = $_SERVER['PATH_INFO'] ?? '/';
    $route = '/^' . str_replace('/', '\/', $route) . '$/';

    if (preg_match($route, $path, $params)) {
        return $params;
    }

    return false;
}
