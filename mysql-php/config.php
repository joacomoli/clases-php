<?php

declare(strict_types=1);

/**
 * Carga variables desde .env (formato KEY=valor, líneas # comentario).
 */
function mysql_php_load_env(string $path): void
{
    if (!is_readable($path)) {
        return;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return;
    }
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || (strlen($line) > 0 && $line[0] === '#')) {
            continue;
        }
        $pos = strpos($line, '=');
        if ($pos === false) {
            continue;
        }
        $name = trim(substr($line, 0, $pos));
        $value = trim(substr($line, $pos + 1));
        if ($value !== '' && ($value[0] === '"' || $value[0] === "'")) {
            $value = trim($value, "\"'");
        }
        if ($name !== '') {
            $_ENV[$name] = $value;
            putenv($name . '=' . $value);
        }
    }
}

$envPath = __DIR__ . DIRECTORY_SEPARATOR . '.env';
mysql_php_load_env($envPath);

define('DB_HOST', $_ENV['DB_HOST'] ?? '127.0.0.1');
define('DB_PORT', (int) ($_ENV['DB_PORT'] ?? '3306'));
define('DB_DATABASE', $_ENV['DB_DATABASE'] ?? 'base');
define('DB_USERNAME', $_ENV['DB_USERNAME'] ?? 'root');
define('DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? '');
