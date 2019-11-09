<?php

declare(strict_types=1);

/**
 * Responsible for rendering pages, where variable $template is Parent view
 * and $ content are children that extend
 * 
 * @param string $content
 * @param string $template
 * @param array $data default
 * 
 * @return view
 */
function render(string $content, string $template, array $data = [])
{
    $content = __DIR__ . '/../templates/' . $content . '.tpl.php';
    return include __DIR__ . '/../templates/' . $template . '.tpl.php';
}
