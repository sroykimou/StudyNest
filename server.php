<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
// CHANGED: Use is_file instead of file_exists to ensure directory paths (like /grade12/science)
// are forwarded to Laravel's router instead of being served statically as folders.
if ($uri !== '/' && is_file(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
